<?php
		
require_once __DIR__ . '/_header.php';

	
$pageTitle = 'cart';

?>

  <!-- Navigation -->
  <p></p>
   <p></p>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Bohemian Fashion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
        <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About</a>
			
          </li>
          
          <li class="nav-item dropdown nav-item-dark">
			<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
				Products
				</a>
					<div class="dropdown-menu">
						<a class="dropdown-item <?= $productsListLinkClass ?>" href="index.php?action=productsList">All Products</a> 
						<a class="dropdown-item <?= $dressLinkClass ?>"  href="index.php?action=dress">Dresses</a>
						<a class="dropdown-item <?= $shirtLinkClass ?>" href="index.php?action=shirt">Shirts & Tops</a>
						<a class="dropdown-item <?= $trouserLinkClass ?>" href="index.php?action=trouser">Trousers & Jeans</a>
						<a class="dropdown-item <?= $coatLinkClass ?>" href="index.php?action=coat">Coats</a>
						<a class="dropdown-item <?= $productListAdminLinkClass ?>" href="index.php?action=productListAdmin">ProductChange</a>
						<a class="dropdown-item <?= $userListAdminLinkClass ?>" href="index.php?action=userListAdmin">UserChange</a>


		  
         
          </li>
		  
		  
		  
		  <li class="nav-item">
            <a class="nav-link" href="index.php?action=showCart">Shopping Cart</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="index.php?action=login">Login/Register</a>
          </li>
		  <li class="nav-item">
             <a class="nav-link" href="index.php?action=contact">Contact Us</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">Site Map</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
	
        <h1 class="md-4">Bohemia</h1>
  
 	<div class="list-group l">
		    <a class="list-group-item <?= $productListLinkClass ?>" href="index.php?action=productList">All Products</a>		  
			<a class="list-group-item <?= $dressLinkClass ?>" href="index.php?action=dress">Dresses</a>
		  <a class="list-group-item <?= $shirtLinkClass ?>" href="index.php?action=shirt">Shirts & Tops</a>
		  <a class="list-group-item <?= $trouserLinkClass ?>" href="index.php?action=trouser">Trousers & Jeans</a>
		  <a class="list-group-item <?= $coatLinkClass ?>" href="index.php?action=coat">Coats</a>
	  
<?php
$admin = 'N';
#
    if (isset($_SESSION["admin"])) {
		$admin = $_SESSION["admin"];
		if ($admin=="Y"){?>
		<a class="list-group-item <?= $productListAdminLinkClass ?>" href="index.php?action=productListAdmin">Products List Admin</a>
		<a class="list-group-item <?= $userListAdminLinkClass ?>" href="index.php?action=userListAdmin">User List Admin</a>
<?php

		}}?>


<!----	
	
		<div class="list-group l">
		    <a class="list-group-item <?= $productListLinkClass ?>" href="index.php?action=productList">All Products</a>		  
			<a class="list-group-item <?= $dressLinkClass ?>" href="index.php?action=dress">Dresses</a>
		  <a class="list-group-item <?= $shirtLinkClass ?>" href="index.php?action=shirt">Shirts & Tops</a>
		  <a class="list-group-item <?= $trouserLinkClass ?>" href="index.php?action=trouser">Trousers & Jeans</a>
		  <a class="list-group-item <?= $coatLinkClass ?>" href="index.php?action=coat">Coats</a>
		<a class="list-group-item <?= $productListAdminLinkClass ?>" href="index.php?action=productListAdmin">Products List Admin</a>
		<a class="list-group-item <?= $userListAdminLinkClass ?>" href="index.php?action=userListAdmin">User List Admin</a>
-->		  
        </div>
		</div>
		

     
	 
	   
	
	  						

