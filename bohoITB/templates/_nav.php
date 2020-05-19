<?php
		
require_once __DIR__ . '/_header.php';

	
$pageTitle = 'cart';

?>

  <!-- Navigation -->
  <p></p>
   <p></p>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Bohemia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=index">Home</a>
        <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=about">About</a>
			
          </li>
          
          <li class="nav-item dropdown nav-item-dark">
			<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
				Products
				</a>
					<div class="dropdown-menu">
						<a class="dropdown-item <?= $productListLinkClass ?>" href="index.php?action=productList">All Products</a> 
						<a class="dropdown-item <?= $dressLinkClass ?>"  href="index.php?action=dress">Dresses</a>
						<a class="dropdown-item <?= $shirtLinkClass ?>" href="index.php?action=shirt">Shirts & Tops</a>
						<a class="dropdown-item <?= $trouserLinkClass ?>" href="index.php?action=trouser">Trousers & Jeans</a>
						<a class="dropdown-item <?= $coatLinkClass ?>" href="index.php?action=coat">Coats</a>
						
						<?php
$admin = 'N';
#
    if (isset($_SESSION["admin"])) {
		$admin = $_SESSION["admin"];
		if ($admin=="Y"){?>
		 <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Administration</a>
		<a class="list-group-item <?= $productListAdminLinkClass ?>" href="index.php?action=productListAdmin">Product Admin</a>
		<a class="list-group-item <?= $userListAdminLinkClass ?>" href="index.php?action=userListAdmin">User Admin</a>
<?php

		}}?>
						


		  
         
          </li>
		  
		  
		  
		  <li class="nav-item">
            <a class="nav-link" href="index.php?action=showCart">Shopping Cart</a>
          </li>
		  
		  <li class="nav-item dropdown nav-item-dark">
			<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
				Login/Register
				</a>
					<div class="dropdown-menu">
						<a class="dropdown-item <?= $registerListLinkClass ?>" href="index.php?action=register">Register</a> 
						<a class="dropdown-item <?= $loginLinkClass ?>"  href="index.php?action=login">Login</a>
						<a class="dropdown-item <?= $homeLinkClass ?>" href="index.php?action=home">My Account</a>
		  
		  </li>
		  
		  
		  
		  
		  <li class="nav-item">
             <a class="nav-link" href="index.php?action=contact">Contact Us</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="index.php?action=sitemap">Site Map</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
	
        <h5 class="md-4">Bohemian Fashion</h5>
  
 	<div class="list-group l list-group-mine ">
		    <a class="list-group-item  <?= $productListLinkClass ?>" href="index.php?action=productList">All Products</a>		  
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
		 <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Administration</a>
		<a class="list-group-item <?= $productListAdminLinkClass ?>" href="index.php?action=productListAdmin">Product Administration</a>
		<a class="list-group-item <?= $userListAdminLinkClass ?>" href="index.php?action=userListAdmin">User Administration</a>
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
		

     
	 
	   
	
	  						

