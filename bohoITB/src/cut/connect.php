<?php

Class Connection {
private $server = "mysql:host=localhost;dbname=projectdb";
private $database ="projectdb";
private $user = "martina";
private $pass = "atkinson";

protected $con;

	public Function openConnection()
	{
		 try 
			{
			 $this->con = new PDO ($this->server, $this->user, $this->pass);
			 return $this->con;
			
			}
		catch (PDOException $e)
		
		{
		
			echo "There is some problem in connection: ". $e->getMessage();
		}
	
	
	}


	public function closeConnection() {
			$this->connection = null;
	}
}