<?php
//-------- page header -------------------
$pageTitle = 'show details of one product';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>
 <div class="col-lg-9" >
		
        
        <div class="row">


 
  <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
 
    <div class="col-md-5">
     <img src="<?= '/images/'.$product['image'] ?>" class="details"> 
    </div>
    <div class="col-md-7">
      <div class="card-body">
 
 <h5 class="card-title">Product Name:  <?=$product['name'] ?></h5>
 <br>
	<dt>ID</dt>
		<dd><?= $product['product_id'] ?></dd>
	 <dt>price</dt>
		<dd  class="card-text">&euro;<?= $product['price'] ?></dd>
		<br>
		
    <dt>description</dt>
		<dd  class="card-text"><?= $product['description'] ?></dd>		
	
      
	  
	  
	  <dt>size</dt>
		<dd  class="card-text"><?= $product['size'] ?></dd>		
        
	  <dt>quantity available</dt>
		<dd  class="card-text"><?= $product['quantityavailable'] ?></dd>	  
     
	  
<a class="btn btn-dark" href="index.php?action=addToCart&id=<?= $product['product_id'] ?>" role="button">ADD TO CART</a>

<!--
	<form action="index.php?action=_cart" method="post" id="add_product_form">
               <input type="hidden" name="product_id" value="">
					<input type="hidden" name="available" id="available" value="">              
					<div class="form-row">
						<div class="form-group ">
							<div class="col-xs-2">			
								<label for="size" class="card-text"><strong>size:</strong></label>
										<select name="size" id="size" class="card-text" >
											<option value="">please select size</option>
												<option value="">S</option>
												<option value="">M</option>
												<option value="">L</option>
											</select>
											</div>
											</div>
											</div>
				<button type="submit" class="btn btn-primary">Add To Cart</button>	
				
								<a class="btn btn-dark" href="index.php?action=addToCart&id=<?=$pd->product_id; ?>" role="button">Details</a>

											</div>
											</div>
											</div>						
											
											
											<div class="form-group ">
<									
								
-->											</div>
									</div>
												
								
				</div>
				</div>
				</div>




							</div>	
					</div>
				</form>
	  
	  
	  </div>
    </div>
  </div>
</div>

</div>
<?php 
		require_once __DIR__ . '/_footer.php';
		require_once __DIR__ . '/_modal.php';
	?>


</body>
</html>