<?php

Class DB {
private $dbHost= "mysql:host=localhost;dbname=projectdb";
private $dbUser ="martina";
private $dbPassword= "atkninson";
private $dbName = "projectdb";
public $conn;



	public Function __construct()
	{
		 try 
			{
			 $dsn="mysql:host=".$this->dbHost.";dbname=".$this->dbName;
			 $this->conn = new PDO($dsn, $this-dbUser, $this->dbPassword);
			 echo "Database Connection Successful";
			 }
		 catch(PDOException $e) 
			{
				die("DB Connection failed: " .$e-getMessage());
			}
		}
}

