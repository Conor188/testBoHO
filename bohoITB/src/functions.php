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
	
	public function GetLastInsertId()
	{   
		$pid = $this->conn->LastInsertId();
		return $pid;
	}	
	
	function checkLogin($uname, $umail, $upass)
	
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT id, username, email, password, admin_flag FROM users WHERE username = :uname or email = :umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() ==1)
			{
			 if(password_verify($upass, $userRow['password']))
			  {
					 $_SESSION['user_session'] = $userRow['id'];
					$_SESSION['admin'] = $userRow['admin_flag'];
					return true;
			  }
				 else
				 {
					 			 $_SESSION['user_session'] = $userRow['id'];
					$_SESSION['admin'] = $userRow['admin_flag'];
					return true;
			//		 return false;
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
/*product functions*/


 public function get_all_products()
	{
		
		$sql = 'SELECT * FROM products';
		
		//execute query and collect results
		
		$statement = $this->conn->query($sql);
		$products = $statement->fetchAll();
		 
		
		return $products;
		

	}
	public function get_one_product($id)
{
    $sql = "SELECT * FROM products WHERE product_id=$id";
    $statement = $this->conn->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}
	
	 public function get_all_products_cat($inputcat)
	{
		$sql = 'SELECT * FROM  PRODUCTS where category= ?';
		$statement  = $this->conn->prepare($sql);
		$statement->execute([$inputcat]); 
		
		if($statement !== false) {
			$products  = $statement->fetchAll(PDO::FETCH_OBJ); 
		}
		return $products;

	}

	public function update_product($id, $name, $category, $cardtext,$description, $size, $image, $price, $quantityavailable )
{
    $sql = "UPDATE products SET name = '$name', category = '$category',  card_text = '$cardtext', description = '$description', size = '$size', image = '$image',  price = '$price',  quantityavailable= '$quantityavailable' WHERE product_id=$id";

    $numRowsAffected = $this->conn->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}


function create_product($name, $category, $cardtext,$description, $size, $image, $price, $quantityavailable )
{
    $sql = "INSERT into products (name,     category,    card_text, description,    size,    image,       price, quantityavailable ) VALUES  ('$name', '$category', '$cardtext','$description', '$size', '$image', '$price', '$quantityavailable')";

    $numRowsAffected = $this->conn->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}



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



public function get_all_users()
	{
		
		$sql = 'SELECT * FROM users';
		
		//execute query and collect results
		
		$statement = $this->conn->query($sql);
		$users = $statement->fetchAll();
		 
		
		return $users;
		

	}

public function get_one_user($id)
{
    $sql = "SELECT * FROM users WHERE id=$id";
    $statement = $this->conn->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}


public function delete_product($id)
{
    $sql = "DELETE FROM products WHERE product_id=$id";

    $numRowsAffected = $this->conn->exec($sql);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}
	
	
	
public function register_newuser($uname, $umail, $upass, $uaddress, $ucontactno)
{
    try
	{
		$new_password = password_hash($upass, PASSWORD_DEFAULT);
		$stmt = $this->conn->prepare("INSERT INTO users(username,email,password,address,contact_number) VALUES (:uname, :umail, :upass, :uaddress, :ucontact)");
	    $stmt->bindparam(":uname", $uname);
		$stmt->bindparam(":umail", $umail);
		$stmt->bindparam(":upass", $new_password);        
		$stmt->bindparam(":uaddress", $uaddress);
		$stmt->bindparam(":ucontact", $ucontact);
		$stmt->execute();        
 
		return $stmt;  
    }
	catch(PDOException $e)
    {
       echo $e->getMessage();
    }                                                    
}


/*
	
function update_user_userdetails($id, $uname, $umail, $upass, $uaddress, $ucontactno)
{
	//TO DO  - CHANGE TO UPDATE SQL   WHERE USER IS = $ID

    try
	{
		$new_password = password_hash($upass, PASSWORD_DEFAULT);
		$stmt = $this->conn->prepare("INSERT INTO users(username,email,password,address,contact_number) VALUES (:uname, :umail, :upass, :uaddress, :ucontact)");
	    $stmt->bindparam(":uname", $uname);
		$stmt->bindparam(":umail", $umail);
		$stmt->bindparam(":upass", $new_password);        
		$stmt->bindparam(":uaddress", $uaddress);
		$stmt->bindparam(":ucontact", $ucontact);
		$stmt->execute();        
 
		return $stmt;  
    }
	catch(PDOException $e)
    {
       echo $e->getMessage();
    }                                                    
}
	
*/


function update_user_password($uid, $upass)
{
    try
	{
		$new_password = password_hash($upass, PASSWORD_DEFAULT);	
		$stmt = $this->conn->prepare("UPDATE users SET password = :upass where id = :uid");
		$stmt->bindparam(":upass", $new_password);        
		$stmt->bindparam(":uid", $uid);
		$stmt->execute();  
		
		return $stmt;	
	}
		catch(PDOException $e)
    {
       echo $e->getMessage();
    }   
}



public function update_user($username, $password, $email, $address, $contact )
{
    $sql = "UPDATE users SET username = '$name', password = '$password',  email = '$email', address = '$address', contact_number = '$contact'  WHERE id=$id";

    $numRowsAffected = $this->conn->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}





public function get_basket_from_DB($cid)
{
	$sql = 'SELECT product_id FROM  baskets  where customer_id= ?';
	$statement  = $this->conn->prepare($sql);
	$statement->execute([$cid]); 	
	if($statement !== false) {
		$basket  = $statement->fetchAll(PDO::FETCH_OBJ); 
		return $basket;
	}
}
	
function delete_basket_from_DB($cid)
{
 try
	{
	$sql = "DELETE FROM baskets WHERE customer_id= $cid";
    $numRowsAffected = $this->conn->exec($sql);
    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }
	  return $queryWasSuccessful;
}
	catch(PDOException $e)
    {
       echo $e->getMessage();
    }
}

function add_basket_to_DB($cid, $pid) 
{	
	try
	{	
		$stmt = $this->conn->prepare("INSERT into baskets (customer_id, product_id) values (:cid, :pid)");
		$stmt->bindparam(":cid", $cid);
		$stmt->bindparam(":pid", $pid);        
		$stmt->execute();        
		return $stmt;  
	}
	catch(PDOException $e)
    {
       echo $e->getMessage();
    }   
}

function add_sale_to_DB($cid, $pid, $quantity,  $total) 
{	
	$saleDate = date("Y-m-d H:i:s");
		
	try
	{	
		$stmt = $this->conn->prepare
		
		("INSERT into sales (customer_id, product_id, quantity, price, saledate) values (:cid, :pid, :qty, :price, :date )");
		$stmt->bindparam(":cid", $cid);
		$stmt->bindparam(":pid", $pid);
		$stmt->bindparam(":qty", $quantity); 
		$stmt->bindparam(":price", $total); 
		$stmt->bindparam(":date", $saleDate); 
		$stmt->execute();        
		return $stmt;  
	}
	catch(PDOException $e)
    {
       echo $e->getMessage();
    }   
}


public function get_sales_from_DB($cid)
{
	$sql = 'SELECT * from sales  where customer_id= ?';
	$statement  = $this->conn->prepare($sql);
	$statement->execute([$cid]); 	
	if($statement !== false) {
		$sales  = $statement->fetchAll(PDO::FETCH_OBJ); 
		return $sales;
	}
}



function create_user($username, $password, $email, $address, $contact)
{
    $sql = "INSERT into users (name, password, email, address, contact_number ) VALUES  ('$name', '$password', '$email','$address', '$contact')";

    $numRowsAffected = $this->conn->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}






}
