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
		}catch (PDOException $e)	
		{	
			echo "There is some problem in connection: ". $e->getMessage();
		}
		return $this->con;
	}

	public function closeConnection () {
			$this->connection = null;
	}
	
	 function get_all_products($connection)
	
	{
		
		$sql = 'SELECT * FROM products';
		
		//execute query and collect results
		
		$statement = $connection->query($sql);
		$products = $statement->fetchAll();
		 
		
		return $products;
		

	}
	
	function get_one_product($connection, $id)
{
    $sql = "SELECT * FROM products WHERE product_id=$id";
    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}


function delete_product($connection, $id)
{
    $sql = "DELETE FROM products WHERE id=$id";

    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}
//**********************************************

function create_product($connection,$description, $price)
{
    $sql = "INSERT into products (description, price) VALUES ('$description', $price)";

    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}


function update_product($connection, $id, $description, $price)
{
    $sql = "UPDATE products SET description = '$description', price = $price WHERE id=$id";

    $numRowsAffected = $connection->exec($sql);

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



	
			
			 