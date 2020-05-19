<?php
		
	
	require_once __DIR__ . '/_header.php';

	

?>

    <!-- /.col-lg-3 -->

      <div class="col-lg-9">
		<p></p>
        <p></p>
        <div class="row">
		<p></p>
        <p></p>
                
 <?php foreach ($products as $product) { ?> 
          <div class="col-lg-4 col-md-6 mb-4">
		  	 
            <div class="card h-100">  
			

			 <img src="<?= $product['image']; ?>" class="card-img-top" alt="" id="images"></a>
				<div class="card-body">
					<h4 class="Dress 1>
					<h5><?= $product['name']; ?></h5>
						<a href="detail.php"></a>
	<a href="" class="item_add prod_detail" data-toggle="modal" data-target="#PRODUCT_DETAILS" href="#myModal<?php echo $row['product_id']; ?>">Add to cart</a></p>

						
						
              </a>
					</h4>
					<h5>Price: <?= $product['price']; ?></h5>
					<h5>Name: <?= $product['name']; ?></h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
				<h5><?= $product['description']; ?></h5>
				
				  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">details</button>
 <br>
 
 <a href="index.php?action=show&id=<?= $product['product_id'] ?>">
 
 
 
				        <button type="button" class="btn btn-sm btn-success" onclick="details(<?= $product['product_id']; ?>)">Details</button>

				
				</div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>


 <?php } ?>
 
</div>
<?php 
		require_once __DIR__ . '/_footer.php';
		require_once __DIR__ . '/_modal.php';
	?>
<!--end of details modal-->
</body>
</html>
