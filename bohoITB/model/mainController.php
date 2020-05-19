<?php
require_once __DIR__ . ('/../model/dbconfig.php');


//this class will hold all the following functions
//we will create a new instance each time the main page is opened 
class USER
{	

	private $conn;
//***********create a construtor for the connection
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
//*********this function when called wiLL RUN a query on the database
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	
//******************************This function will verify the user that is attempting to log in 
	
	public function checkLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT id, username, email, password FROM users WHERE username=:uname OR email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['password']))
				{
					$_SESSION['user_session'] = $userRow['id'];
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
//**********************************************when this is called it will redirect the user to the chosen directort in the method call
	public function redirect($url)
	{
		header("Location: $url");
	}
	//**************************************************Register a new user************************************************
	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(username,email,password) 
		                                               VALUES(:uname, :umail, :upass)");
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	

/**************************************************Display all products from database**********************************/
	  
	
	
	
	
}
?>