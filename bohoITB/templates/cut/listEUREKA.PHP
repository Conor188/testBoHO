<?php
		
	
	require_once __DIR__ . '/_header.php';

	require_once __DIR__ . '/../src/connect.php';	
	$connection = new Connection();
	$db =$connection->openConnection();
	$products =$connection->get_all_products($db);	
	var_dump($products);
	


?>
     <!--remove the spaces and center the products-->
  <div class="col-md-2"></div>

<!--main content of featured products-->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Featured Products</h2>
      <?php foreach ($products as $product) { ?> 
      <div class="col-md-3 text-center">
        <h4><?= $product['title']; ?></h4>
        <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" id="images"/>
        <p class="list-price text-danger">List Price: <s>$<?=$product['list_price']; ?></s></p>
        <p class="price">Our Price: $<?=$product['price']; ?></p>
        <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>
      </div>
	  <?php } ?>
  </div>
 <div class="col-md-2"></div>
</div><br><br>
	  
<?php
    include 'includes/footer.php';
 ?>
<!--end of details modal-->
</body>
</html>
