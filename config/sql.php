<?php

require_once('class/database.php');

  try {

    $db = database::connection();

    // sql to create table

$users = "CREATE TABLE IF NOT EXISTS users (
    'user_id' INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   'user_name' VARCHAR( 255 ) NOT NULL ,
  'user_email' VARCHAR( 60 ) NOT NULL ,
   'user_pass' VARCHAR( 255 ) NOT NULL ,
   'user_phone' VARCHAR( 255 ) NOT NULL ,
    UNIQUE ('user_name'),
    UNIQUE ('user_email')
    )";




    $db->execute($users);
    echo "Tables created successfully";
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $db = null;
