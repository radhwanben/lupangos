<?php

require_once 'class/database.php';
require_once 'class/user.php';
require_once 'class/Mail.php';
require 'config/config.php';


$user =new User();

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}

// register user part

if(isset($_POST['btn-signup']))
{
   $uname = trim($_POST['uname']);
   $umail = trim($_POST['email']);
   $upass = trim($_POST['password']); 
   $uphone = trim($_POST['phone']); 
 
   if($uname=="") {
      $error[] = "provide username !"; 
   }
   else if($umail=="") {
      $error[] = "provide email id !"; 
   }
   else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   }
   else if($upass=="") {
      $error[] = "provide password !";
   }
   else if(strlen($upass) < 6){
      $error[] = "Password must be atleast 6 characters"; 
   }
   else
   {
      $activecode=$user->generate_activation_code();
      try
      {
        $stmt = $user->db->prepare("SELECT username,email FROM users WHERE username=:uname OR email=:umail");
         $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
         if($row['username'] == $uname) {
            echo "<script>alert('sorry username already taken !')</script>";
         }
         elseif($row['email'] == $umail) {
            echo "<script>alert('sorry email id already taken !')</script>";

         }  
         elseif(!$errors){
         $user->register($uname,$umail,$upass,$uphone,$activecode);     
         // sending email for confirmation account activate process
         $recieverEmail = $umail;
         $subject = "Activate Your Account ";
         $email_template ="views/validatemail.html";
         $body = file_get_contents($email_template);
         $body =str_replace('%uname%', $uname, $body);
         $body =str_replace('%activation_code%', $activecode, $body);
         $mailer = new Mail($SMTP_USER,$SMTP_PASSWORD,$SMTP_HOST,$SMTP_PORT);
    
         $mailer->sendMail($recieverEmail,$subject,$body);
         
         // redirect the user to the a page have alert to activate his account

         $user->redirect('/home');
            }
         
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}


// login user part 

if(isset($_POST['btn-login']))
{
 $umail = $_POST['email'];
 $upass = $_POST['password'];
  
 if($user->login($umail,$upass))
 {
  $user->redirect('/home');
 }
 else
 {
   $user->redirect('/login');
} 


}

?>