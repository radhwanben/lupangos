<?php

require_once('database.php');

class userHandller
{

    public $db;
 
    public function __construct()
    {
        $this->db = database::connection();
    }

    public function UpdateUserInfo(int $id, string $username)
    {
        try {
            $stmt = $this->db->prepare('UPDATE users SET username=:username WHERE id=:id');
            $stmt->execute([
                'id' => $id,
                'username' => $username
             ]);
            return $stmt->rowCount();
        } catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }


}