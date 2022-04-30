<?php

require_once('database.php');

class USER
{
    public $db;
 
    function __construct()
    {
        $this->db = database::connection();
    }
 
    public function register($uname,$umail,$upass,$uphone,$activecode)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO users(username,email,password,phone,activation_code) 
                                                       VALUES(:uname, :umail, :upass ,:uphone,:activecode)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);  
           $stmt->bindparam(":uphone", $uphone);
           $stmt->bindparam(":activecode", $activecode);
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


    function find_unverified_user(string $activation_code, string $username)
    {
    
        $sql = 'SELECT id, activation_code, activation_expiry < now() as expired
                FROM users
                WHERE active = 0 AND username=:username';
    
        $statement = $this->db->prepare($sql);
    
        $statement->bindValue(':username', $username);
        $statement->execute();
    
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $user;
    }
    function login(string $username, string $password): bool
    {
        $user = find_user_by_username($username);
    
        if ($user && is_user_active($user) && password_verify($password, $user['password'])) {
            // prevent session fixation attack
            session_regenerate_id();
    
            // set username in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
    
            return true;
        }
    
        return false;
    }
 

   function find_user_by_username(string $username)
   {
       $sql = 'SELECT username, password, active, email
               FROM users
               WHERE username=:username';

       $statement = $this->db->prepare($sql);
       $statement->bindValue(':username', $username);
       $statement->execute();

       return $statement->fetch(PDO::FETCH_ASSOC);
   }

   function is_user_active($user)
   {
       return (int)$user['active'] === 1;
   }


   function activate_user(int $user_id): bool
    {
        $sql = 'UPDATE users
                SET active = 1,
                    activated_at = CURRENT_TIMESTAMP
                WHERE id=:id';

        $statement = $this->db->prepare($sql);
        $statement->bindValue(':id', $user_id, PDO::PARAM_INT);

        return $statement->execute();
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
