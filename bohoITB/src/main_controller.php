 <?php

// require_once __DIR__ . '/product_functions.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/dbconfig.php';
	
function index_action()
{
    $pageTitle = 'home page';	
	require_once __DIR__ . '/../templates/index.php';
}

function about_action()
{
    $pageTitle = 'about page';
	require_once __DIR__ . '/../templates/about.php';
}

function product_list_action()
{
	
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="";
	$coatLinkClass="";
	$trouserLinkClass="";
	$productListLinkClass="list-group-item-dark active";



/*
	$connection = connect_to_db();	
	$products =get_all_products($connection);
*/	

	$list = new USER();
	$products = $list->get_all_products();
	require_once __DIR__ . '/../templates/product_list.php';

}

function product_list_admin_action()

{
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="";
	$coatLinkClass="";
	$trouserLinkClass="";
	$productListAdminLinkClass="list-group-item-dark active";
	
	
	
	// 1. get connection
    //$connection = connect_to_db();

    // 2. get all products
    //$products = get_all_products($connection);

    // 3. read and execute template
	$list = new USER();
	$products = $list->get_all_products();
	
	require_once __DIR__ . '/../templates/product_list_admin.php';
}


function show_one_product_action()
{
	
	
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$ListOneP = new USER();
	$product = $ListOneP->get_one_product($id);


    if(null == $product){
        $message = 'sorry, no product with id = ' . $id . ' could be retrieved from the database';

        // output the detail of product in HTML table
        require_once __DIR__ . '/../templates/message.php';
    } else {
        // output the detail of product in HTML table
        require_once __DIR__ . '/../templates/detail_product.php';
    }
}

	
function contact_action()
{
    $pageTitle = 'contact page';
	require_once __DIR__ . '/../templates/contact.php';
}

function login_action()
{
    $pageTitle = 'login page';
	require_once __DIR__ . '/../templates/login.php';
}

function register_action()
{
    $pageTitle = 'register page';
	require_once __DIR__ . '/../templates/register.php';
}
function home_action()
{
    $pageTitle = 'home page';
	require_once __DIR__ . '/../templates/home.php';
}


function savebasket_action()
{  
	if (isset($_SESSION['user_session']))  
	{
		$cartDB = new USER();
		$cid = $_SESSION['user_session'];
		$cartDB->delete_basket_from_DB($cid);
		$shoppingCart = getShoppingCart();
		foreach($shoppingCart as $key=>$quantity):
			$pid  = $key;
			for ($x = 0; $x < $quantity ;$x++) 
				$success =$cartDB->add_basket_to_DB($cid, $pid); 
		endforeach;
		
		$message =  "$cid    Stored in DB";
		require_once __DIR__ . '/../templates/message.php';
	}else{
		require_once __DIR__ . '/../templates/login.php';
	}
}

function sitemap_action()
{
    $pageTitle = 'sitemap page';
	require_once __DIR__ . '/../templates/sitemap.php';
}

function dress_action()
{
    $pageTitle = 'dress page';	
	
	$indexLinkClass="";
	$dressLinkClass= "list-group-item-dark active";
	$shirtLinkClass="";
/*	
	
	$connection = connect_to_db();	
	//$products =get_all_products($connection);
	$products =get_all_products_cat($connection,"D");
*/	
	
	$ListOneCat = new USER();
	$products  = $ListOneCat->get_all_products_cat("D");
	

	require_once __DIR__ . '/../templates/dress.php';

}
function shirt_action()
{
    
	$pageTitle = 'shirt page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="list-group-item-dark active";
	
   $ListOneCat = new USER();
	$products  = $ListOneCat->get_all_products_cat("S");

	
	require_once __DIR__ . '/../templates/shirt.php';	
}



function coat_action()
{
   
   
   $pageTitle = 'coat page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";	
	$coatLinkClass="list-group-item-dark active";
	
   $ListOneCat = new USER();
	$products  = $ListOneCat->get_all_products_cat("C");
	
	require_once __DIR__ . '/../templates/coat.php';
 
}

function trouser_action()
{
    	
	$pageTitle = 'trouser page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";	
	$coatLinkClass="";
	$trouserLinkClass="list-group-item-dark active";
	
	$ListOneCat = new USER();
	$products  = $ListOneCat->get_all_products_cat("T");
	
	
	require_once __DIR__ . '/../templates/trousers.php';
}

function admin_action()
{
	require_once __DIR__ . '/../templates/admin.php';
}

function show_new_product_form_action()

{
    require_once __DIR__ . '/../templates/new_product_form.php';
	
}

function create_product_action()

	
{
   
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
	$cardtext = filter_input(INPUT_POST, 'card_text', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
	$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);  
	$image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $quantityavailable = filter_input(INPUT_POST, 'quantityavailable', FILTER_SANITIZE_STRING);


	$CreatePd = new USER();
    $success = $CreatePd->create_product( $name, $category,  $cardtext, $description, $size, $image, $price, $quantityavailable);
    if($success){
        $pid = $CreatePd->GetLastInsertId();
        $message = "SUCCESS - new product with ID = $pid created";
    } else {
        $message = 'sorry, there was a problem creating new product';
    }
	
    
    require_once __DIR__ . '/../templates/message.php';
}

function show_update_product_form_action()
{
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$ListOneP = new USER();
	$product = $ListOneP->get_one_product($id);

    require_once __DIR__ . '/../templates/update_product_form.php';
}

function update_product_action()
{
    

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
	$cardtext = filter_input(INPUT_POST, 'card_text', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
	$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);  
	$image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $quantityavailable = filter_input(INPUT_POST, 'quantityavailable', FILTER_SANITIZE_STRING);

	$UpdateProduct = new USER();
	
    $success = $UpdateProduct->update_product( $id, $name, $category,  $cardtext, $description, $size, $image, $price, $quantityavailable);
    if($success){
        $message = "SUCCESS -  product with ID = $id updated";
    } else {
        $message = 'sorry, there was a problem updated the product';
    }

    require_once __DIR__ . '/../templates/message.php';
}

function delete_product_action()
{
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
   
	$DelProduct = new USER();
    $success = $DelProduct->delete_product($id);

    if($success){
        $message = 'SUCCESS - product with id = ' . $id . ' was deleted';
    } else {
        $message = 'sorry, product with id = ' . $id . ' could not be deleted';
    }

    require_once __DIR__ . '/../templates/message.php';
}


function user_list_admin_action()
{
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="";
	$coatLinkClass="";
	$trouserLinkClass="";
	$userListAdminLinkClass="list-group-item-dark active";
	
	
	
	
	
	
	$list = new USER();
	$users = $list->get_all_users();
	
	require_once __DIR__ . '/../templates/user_list_admin.php';
}

function show_one_user_action()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$ListOneU = new USER();
	$user = $ListOneU->get_one_user($id);

    if(null == $user)
	{
        $message = 'sorry, no product with id = ' . $id . ' could be retrieved from the database';
        require_once __DIR__ . '/../templates/message.php';
    } else {
        require_once __DIR__ . '/../templates/detail_user.php';
    }
}

function getShoppingCart()
{
    if (isset($_SESSION['shoppingCart']))
	{
        return $_SESSION['shoppingCart'];
    } else 
	{
        return [];
    }
}	
	
function add_to_cart_action()
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

function remove_from_cart_action()
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
	
	 require_once __DIR__ . '/../templates/_cart.php';
   // index_Action();
	
}


function forgetSession()
{
    killSession();

    // redirect to display text
    index_Action();
}


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



function show_cart_action()
{
   
   
   $pageTitle = 'cart page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";	
	$show_cartLinkClass="list-group-item-dark active";
	
   
	require_once __DIR__ . '/../templates/_cart.php';
 
}

function show_update_user_form_action()
{
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$ListOneU= new USER();
	$user = $ListOneU->get_one_user($id);

    require_once __DIR__ . '/../templates/update_user_form.php';
}

function update_user_action()
{
    
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $contact = filter_input(INPUT_POST, 'contact_number', FILTER_SANITIZE_STRING);
	
	$UpdateUser = new USER();
	
    $success = $UpdateUser->update_user( $id, $username, $password,  $email, $contact);
    if($success){
        $message = "SUCCESS -  user with ID = $id updated";
    } else {
        $message = 'sorry, there was a problem updated the user';
    }

   // require_once __DIR__   '/../templates/message.php';
}

function show_new_user_form_action()

{
    require_once __DIR__ . '/../templates/new_user_form.php';
	
}










function create_user_action()

	
{
   
    $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
	$contact = filter_input(INPUT_POST, 'contact_number', FILTER_SANITIZE_STRING);  
	$admin = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);


	$CreateUS = new USER();
    $success = $CreateUS->create_user( $name, $password,  $email, $address, $contact, $admin);
    if($success){
        $pid = $CreateUS->GetLastInsertId();
        $message = "SUCCESS - new user with ID = $uid created";
    } else {
        $message = 'sorry, there was a problem creating new user';
    }
	
    
    require_once __DIR__ . '/../templates/message.php';
}


function checkout_action()
{
	if (isset($_SESSION['user_session']))  
	{	
		$saleDB = new USER();
		$cid = $_SESSION['user_session'];
		$shoppingCart = getShoppingCart();
		foreach($shoppingCart as $key=>$quantity):
			$pid  = $key;
			$product = $saleDB->get_one_product($pid);
			$price = $product['price'];
			$total = $price *  $quantity;
			$success =$saleDB->add_sale_to_DB($cid, $pid, $quantity, $total);
		endforeach;
		
		$message =  "$cid   = Order stored DB";
		require_once __DIR__ . '/../templates/message.php';
	}else{
		require_once __DIR__ . '/../templates/login.php';
	}
}