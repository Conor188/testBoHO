<?php

require_once ('dbconfig.php');

//this class will hold all the following functions
//we wil create a new instance each time the main page is opened

class USER
{

	private $conn;
	//********create a constructor for the connection
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
		
	}
	
	//**************this function when called will run a query on the database
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return  $stmt;
	}
	
	function checkLogin($uname, $umail, $upass)
	
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT customer_id, email, password FROM customer WHERE lname = :uname or email = :umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() ==1)
			{
			 if(password_verify($upass, $userRow['password']))
			 {
					$_SESSION['user_session'] = $userRow['customer_id'];
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
	public function redirect($url)
	
	{
		header("Location:$url");
	}
	
	
	
	
	
}
