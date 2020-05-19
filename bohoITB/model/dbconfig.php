<?php

//create a class for the connection to the database
class Database
{
    private $host = "localhost";
    private $db_name = "projectdb";
    private $username = "martina";
    private $password = "atkinson";

    public $conn;
     //funnction to connect to the database
    public function dbConnection()
	{

	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>