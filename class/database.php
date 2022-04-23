<?php

class database{

    static function connection()
	{
		try {
			$conn = new \PDO("mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_d52e262c7fd0519", 'b33fc0383cf56d', 'b45185ce');
	        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			 $conn = null;
		}
			return $conn;
	}



}

