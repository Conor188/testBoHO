<?php

 require_once __DIR__ . '/product_functions.php';


	
 

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

function list_action()
{
	
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="";
	$coatLinkClass="";
	$trouserLinkClass="";
	$listLinkClass="list-group-item active";

	$connection = connect_to_db();	
	$products =get_all_products($connection);
	require_once __DIR__ . '/../templates/list.php';

}

function listher_action()

{
	// 1. get connection
    $connection = connect_to_db();

    // 2. get all products
    $products = get_all_products($connection);

    // 3. read and execute template
	
	
	require_once __DIR__ . '/../templates/listher.php';
}




function show_one_product_action()
{
	
	
	$connection = connect_to_db();

  

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $product = get_one_product($P, $id);

    if(null == $product){
        $message = 'sorry, no product with id = ' . $id . ' could be retrieved from the database';

        // output the detail of product in HTML table
        require_once __DIR__ . '/../templates/message.php';
    } else {
        // output the detail of product in HTML table
        require_once __DIR__ . '/../templates/detail.php';
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


function sitemap_action()
{
    $pageTitle = 'sitemap page';
	require_once __DIR__ . '/../templates/sitemap.php';
}

function dress_action()
{
    $pageTitle = 'dress page';	
	
	$indexLinkClass="";
	$dressLinkClass= "list-group-item active";
	$shirtLinkClass="";
	$connection = connect_to_db();	
	//$products =get_all_products($connection);
	$products =get_all_products_cat($connection,"D");
	
	
	
	

	require_once __DIR__ . '/../templates/dress.php';

}
function shirt_action()
{
    
	
	$pageTitle = 'shirt page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="list-group-item active";
	
	require_once __DIR__ . '/../templates/shirt.php';	
}

function shoes_action()
{
    
	
	
		
	$pageTitle = 'shoes page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="list-group-item active";
	
	require_once __DIR__ . '/../templates/shoes.php';
}

function coat_action()
{
   
   
   $pageTitle = 'coat page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="";
	$coatLinkClass="list-group-item active";
	
	require_once __DIR__ . '/../templates/coat.php';
   
   
   
 
}

function trouser_action()
{
    
	
	
	$pageTitle = 'trouser page';
		
	$indexLinkClass="";
	$dressLinkClass="";
	$shirtLinkClass="";
	$shoesLinkClass="";
	$coatLinkClass="";
	$trouserLinkClass="list-group-item active";
	
	require_once __DIR__ . '/../templates/trouser.php';
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
    $connection = connect_to_db();

	$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT);
    //$image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_NUMBER_INT);

    $success = create_product($connection, $description, $price);

    if($success){
        $id = $connection->LastInsertId();
        $message = "SUCCESS - new product with ID = $id created";
    } else {
        $message = 'sorry, there was a problem creating new product';
    }

    require_once __DIR__ . '/../templates/message.php';
}

function show_update_product_form_action()
{
    $connection = connect_to_db();

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $product = get_one_product($connection, $id);

    require_once __DIR__ . '/../templates/update_product_form.php';
}

function update_product_action()
{
    $connection = connect_to_db();

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
	$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);  
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);

	
	
	//$image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_NUMBER_INT);

    $success = update_product($connection, $id, $name,  $company, $category,  $description, $size, $price, $image);

    if($success){
        $message = "SUCCESS -  product with ID = $id updated";
    } else {
        $message = 'sorry, there was a problem updated the product';
    }

    require_once __DIR__ . '/../templates/message.php';
}

function delete_product_action()
{
    $connection = connect_to_db();

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $success = delete_product($connection, $id);

    if($success){
        $message = 'SUCCESS - product with id = ' . $id . ' was deleted';
    } else {
        $message = 'sorry, product with id = ' . $id . ' could not be deleted';
    }

    require_once __DIR__ . '/../templates/message.php';
}