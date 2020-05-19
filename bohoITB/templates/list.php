<?php
		
require_once __DIR__ . '/_header.php';

	
$pageTitle = 'list';

?>
	
    <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">
		<?php foreach ($products as $product) { ?> 
			
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">  
			 <img src="<?= $product['image']; ?>" class="card-img-top" alt="" id="images"></a>
				<div class="card-body">
					<h5> <?= $product['name']; ?></h5>
					<h6>Price: <?= $product['price']; ?></h6>


				<a class="btn btn-dark" href="index.php?action=show&id=<?=$product['product_id']; ?>" role="button">Details</a>
  			
			<p class="card-text"><?= $product['card_text']; ?></p>
							 
	
				</div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>


<?php } ?>
</div>
</div>	
 </div>
 </div>
<?php 
		require_once __DIR__ . '/_footer.php';
		
	?>
<!--end of details modal-->

</body>
</html>






