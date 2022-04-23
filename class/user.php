<?php

require_once('database.php');

class USER
{
    public $db;
 
    function __construct()
    {
        $this->db = database::connection();
    }
 
    public function register($uname,$umail,$upass,$uphone)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass,user_phone) 
                                                       VALUES(:uname, :umail, :upass ,:uphone)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);  
           $stmt->bindparam(":uphone", $uphone);
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function generate_activation_code(): string
    {
        return bin2hex(random_bytes(16));
    }


    public function send_activation_email(string $email, string $activation_code): void
    {
        // create the activation link
        $activation_link = APP_URL . "/activate.php?email=$email&activation_code=$activation_code";
    
        // set email subject & body
        $subject = 'Please activate your account';
        $message = <<<MESSAGE
                Hi,
                Please click the following link to activate your account:
                $activation_link
                MESSAGE;
        // email header
        $header = "From:" . SENDER_EMAIL_ADDRESS;
    
        // send the email
        mail($email, $subject, nl2br($message), $header);
    
    }


    public function login($umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_email=:umail LIMIT 1");
          $stmt->execute(array(':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['user_pass']))
             {
                $_SESSION['user_session'] = $userRow['user_id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>
