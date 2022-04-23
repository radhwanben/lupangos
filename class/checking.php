<?php

require_once 'class/database.php';
require_once 'class/user.php';

$user =new User();

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}

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
      try
      {
         $stmt = $user->db->prepare("SELECT user_name,user_email FROM users WHERE user_name=:uname OR user_email=:umail");
         $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
         if($row['user_name']==$uname) {
            $error[] = "sorry username already taken !";
         }
         else if($row['user_email']==$umail) {
            $error[] = "sorry email id already taken !";
         }
         else
         {
            if($user->register($uname,$umail,$upass,$uphone)) 
            {
                $user->redirect('/home');
            }
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}

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