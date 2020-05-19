<?php
	
foreach ($products as $product) { ?>
 





<div class="container">
  
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <!-- <div class="modal fade" id="myModal" role="dialog"> -->
    
	
	<div class="modal fade details-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">

	
<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
			<!---<?php foreach ($products as $product) { ?> -->
				<h4 class="modal-title text-center"><?= $product['productname']; ?></h4>
					<button type="button" class="close" type="button" data-dismiss="modal">&times;</button>
		</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row"> 
					 <span id="modal_errors" class="bg-danger"></span>
						<div class="col-sm-8">
							<div class="center-block fotorama" data-autoplay="true">
			
								<img src="images/dress1.jpg" alt="dress 1" class="details img-reponsive"/>
			
							</div>
						</div>
			
							<div class="col-sm-4">
		   
								<form action="add_cart.php" method="post" id="add_product_form">
							   <input type="hidden" name="product_id" value="">
							   <input type="hidden" name="available" id="available" value="">
							   
							  <div class="form-row">
                  
			   
			   
								   <div class="form-group ">
									<div class="col-xs-2">
										<h4>Details</h4>
											<p><?= $product['price']; ?></p>
											<p>Brand: Bohemia</p>
									
											<label for="size">Size:</label>
                
						
							<select name="size" id="size" class="form-control">
									<option value="">Please select size</option>
									<option value="">8</option>
									<option value="">10</option>
									<option value="">12</option>
									<option value="">14</option>
							</select>
				
				
							<div class="form-group">
								  <div class="col-xs-4">
								 <label for="quantity" id="quantity-label">Quantity:</label>
								 <input type="number" class="form-control" id="quantity" name="quantity" min="0" placeholder="Please enter quantity"></div><br><div class="col-xs-9">&nbsp;</div>
								</div><br />		
			   
			   
						
						
					</div>
				
			
		</form>
	</div>
	</div>
	</div>
</div>
</div>
     <div class="modal-footer">
       <button class="btn btn-default" onclick="closeModal()">Close</button>
       <button class="btn btn-warning" onclick="add_to_cart();return false;"><span class="glyphicon glyphicon-shopping-cart"></span> Add To cart</button>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
