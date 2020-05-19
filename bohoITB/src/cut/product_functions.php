<?php


function connect_to_db()
{
    // DSN - the Data Source Name - requred by the PDO to connect
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

    // attempt to create a connection to the database
    try {
        $connection = new PDO($dsn, DB_USER, DB_PASS);
    } catch (\PDOException $e) {
        // deal with connection error
        print 'ERROR - there was a problem trying to create DB connection' . PHP_EOL;
        return null;
    }

    return $connection;
}



	
	 function get_all_products($connection)
	
	{
		
		$sql = 'SELECT * FROM products';
		
		//execute query and collect results
		
		$statement = $connection->query($sql);
		$products = $statement->fetchAll();
		 
		
		return $products;
		

	}
	
	
	
	 function get_all_products_cat($connection, $inputcat)
	
	{
		
		$sql = 'SELECT * FROM  PRODUCTS where category= ?';
		$statement  = $connection->prepare($sql);
		$statement->execute([$inputcat]); 
		
		if($statement !== false) {
			$products  = $statement->fetchAll(PDO::FETCH_OBJ); 
		}
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

function create_product($connection,$name, $description)
{
    $sql = "INSERT into userdetails (name, description) VALUES ('$name', '$description')";

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


function update_product($connection, $id, $name, $company, $category, $description, $size,  $price, $image)
{
    $sql = "UPDATE products SET name = '$name', company = '$company', category = '$category',  description = '$description', size = '$size', price = '$price', image = '$image' WHERE id=$id";

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

function indexAction()
{
    $shoppingCart = getShoppingCart();
    $products = get_all_products();

    require_once __DIR__ . '/../templates/index.php';
}
function addToCart()
{
    // get the ID of product to add to cart
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // get the cart array
    $shoppingCart = getShoppingCart();

    // default is old total is zero
    $oldTotal = 0;

    // if quantity found in cart array, then use this
    if(isset($shoppingCart[$id])){
        $oldTotal = $shoppingCart[$id];
    }

    // store old total + 1 as new quantity into cart array
    $shoppingCart[$id] = $oldTotal + 1;

    // store new  array into SESSION
    $_SESSION['shoppingCart'] = $shoppingCart;

	    require_once __DIR__ . '/../templates/_cart.php';
    // redirect display page
   
}
//*******************************************REMOVE FROM SESSION?/CART*****************************************//
function removeFromCart()
{
    // get the ID of product to add to cart
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    // get the cart array
    $shoppingCart = getShoppingCart();

    // remove entry for this ID
    unset($shoppingCart[$id]);

    // store new  array into SESSION
    $_SESSION['shoppingCart'] = $shoppingCart;

    // redirect display page
    indexAction();
}

function getShoppingCart()
{
    if (isset($_SESSION['shoppingCart'])){
        return $_SESSION['shoppingCart'];
    } else {
        return [];
    }
}
//************************************************************************************//

function forgetSession()
{
    killSession();

    // redirect to display text
    indexAction();
}

/**
 * advice on how to kill session from PHP.net
 * URL: http://php.net/manual/en/function.session-destroy.php
 */
function killSession()
{
    // (1) Unset all of the session variables.
    $_SESSION = [];

    // (2) If it is desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get('session.use_cookies')){
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }

    // (3) destroy the session.
    session_destroy();
}


	
			
			 