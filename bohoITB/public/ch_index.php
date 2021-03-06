<?php
session_start();

require_once __Dir__ .'/../vendor/autoload.php';

require_once __DIR__ . '/../src/main_controller.php';

$action = filter_input(INPUT_GET, 'action');

error_reporting(E_ALL);
ini_set('display_errors', 1);


// get action GET parameter (if it exists)
//$action = filter_input(INPUT_GET, 'action');
//$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

// based on value (if any) of 'action' decide which template to output
switch ($action){
    case 'about':
        about_action();
        break;
    case 'contact':
        contact_action();
        break;

    case 'productList':
        product_list_action();		
        break;
    case 'dress':
        dress_action();
        break;
	case 'shirt':
        shirt_action();
        break;
	case 'coat':
        coat_action();
        break;
	 case 'trouser':
        trouser_action();
        break;

	case 'login':
        login_action();
        break;	
	case 'home':
        home_action();
        break;
	case 'register':
        register_action();
        break;			
	case 'sitemap':
        sitemap_action();
        break;
	case 'showUpdateUserForm':
		update_user_action();
		break;

//for admin users if you wish or normal users to change their details
	case 'updateProduct':
		update_product_action();
		break;	

//for admin users if you wish 
    case 'showNewProductForm':
        show_new_product_form_action();
        break;


//for admin users if you wish 
    case 'createNewProduct':
        create_product_action();
        break;
    case 'deleteProduct':
        delete_product_action();
        break;
	case 'show':
		show_one_product_action();
		break;

	case 'addToCart':
		add_to_cart_action();
		break;
	case 'removeFromCart':
		remove_from_cart_action();
		break;
		
	case 'emptyCart':
		forgetSession();
		break;
		
	case 'showCart':
		show_cart_action();
		break;
		
	case 'admin':
		admin_action();
		break;
		
	
	//for admin users if you wish 

    case 'showNewProductForm':
        show_new_product_form_action();
        break;
//for admin users if you wish 
    case 'createNewProduct':
        create_product_action();
        break;
	//the case to display the products......remember this is productAction in YOUR MVC....

   
	//as before 
    case 'deleteUser':
        delete_user_action();
        break;
	 case 'userListAdmin':
        user_list_admin_action();		
        break;
	case 'showUpdateUserForm':
		update_user_form_action();
		break;	
//for admin users if you wish 
    case 'showNewUserForm':
        show_new_user_form_action();
        break;	
	case 'showUser':
		show_one_user_action();
		break;

    case 'productListAdmin':
        product_list_admin_action();		
        break;

    case 'index':
    default:
        // default is home page ('index' action)
        require_once __DIR__ . '/../templates/index.php';
}