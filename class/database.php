<?php

class database{

    static function connection()
	{
		try {
			$conn = new \PDO("mysql:host=localhost;dbname=lupangos", 'root', '');
	        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			 $conn = null;
		}
			return $conn;
	}



}

