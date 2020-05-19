<?php
		
require_once __DIR__ . '/_header.php';

	
$pageTitle = 'about';

?>

  <div class="col-lg-9">
        <div class="row">
			<div class="card ">
				<div class="card-header">
					Bohemia 
				</div>
				<div class="card-body">
					<h3 class="card-title">Site Map</h3>
								 <img src="images/sitemap1.jpg" class="card-img-top" alt="" id="images"></a>

	<div class="row">
		<div class="col-sm-12">
           
    	    <ul>
                <li><a  href="index.php?action=index"><strong>Home</strong></a></li>   
                <li><a href="index.php?action=about"><strong>About</strong></a></li>
				<li><a href="#"><strong>Products</strong></a></li>
					<ul><li><a href="index.php?action=productList">All Products</a></li>
						<li><a href="index.php?action=dress">Dresses</a></li>
						<li><a href="index.php?action=shirt">Shirts & Tops</a></li>
						<li><a href="index.php?action=trouser">Trousers & Jeans</a></li>
						<li><a href="index.php?action=coat">Coats </a></li>
					</ul>
                <li><a href="index.php?action=cart"><strong>Shopping Cart</strong></a></li>
				<li><a href="index.php?action=login"><strong>Login/Register</strong></a></li>
					<ul><li><a href="index.php?action=register">Register</a></li>
						<li><a href="index.php?action=login">Login</a></li>
						<li><a href="index.php?action=home">My Account </a></li>
					</ul>
				<li><a href="index.php?action=contact"><strong>Contact Us</strong></a></li>
				<li><a href="index.php?action=sitemap"><strong>SiteMap</strong></a></li>
                <li><a href="index.php?action=productlistAdmin"><strong>Product Administration</strong></a></li>
					<ul><li><a href="index.php?action=productListAdmin">Details Product</a></li>
						<li><a href="index.php?action=productListAdmin">Update Product</a></li>
						<li><a href="index.php?action=showNewProductForm">Create Product </a></li>
					</ul>
				
				<li><a href="index.php?action=userListAdmin"><strong>User Administration</strong></a></li>
					<ul><li><a href="index.php?action=userListAdmin">Details User</a></li>
						<li><a href="index.php?action=userListAdmin">Update User</a></li>
						<li><a href="index.php?action=showNewUserForm">Create User </a></li>
					</ul>
    	    </ul>   
		</div>
	</div>
</div>    
						
	
	
			
				</div>
				</div>
			</div>
		</div>
</div>
</div>


<?php 
		require_once __DIR__ . '/_footer.php';
		
	?>
	
</div>

</body>
</html>






