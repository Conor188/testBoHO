<?php
		
require_once __DIR__ . '/_header.php';
	
$pageTitle = 'dress';

?>
	
    <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">
		<?php foreach ($products as $pd) { ?> 
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">  
			 <img src="<?= $pd->image; ?>" class="card-img-top" alt="" id="images"></a>
				<div class="card-body">
					<h5> <?= $pd->name; ?></h5>
					<h6>Price: <?= $pd->price; ?></h6>
					<p class="card-text"><?= $pd->card_text; ?></p>

<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">details</button>

<button type="button" onclick="location.href=<a href="index.php?action=show&id=<?= $product['product_id'] ?>DETQIL>
 <a href="index.php?action=show&id=<?= $product['product_id'] ?>" class="btn btn-info" role="button"></a>
	
              
	
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
<?php 
		require_once __DIR__ . '/_footer.php';
		require_once __DIR__ . '/_modal.php';
	?>
<!--end of details modal-->

</body>
</html>






