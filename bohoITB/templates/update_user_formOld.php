<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>

<div class="card">
  <div class="card-header bg-primary  text-center">
   <h5> UPDATE PRODUCT</h5>
  </div>
  <div class="card-body">
    <p class="card-tex" >Form to update product details. Please click update product button to save the changes</p>
  


<form
    action="index.php?action=updateProduct" method="POST"
>
    <!-- ****** send ID, but don't let user see this ***** -->
    <input type="hidden" name="id" value="<?= $product['product_id'] ?>">
	
	 <div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
	</div>

	<div class="form-group">
		<label>Category</label>
		<input type="text" class="form-control" name="category" value="<?= $product['category'] ?>">
	</div>
	<div class="form-group">
		<label>Card Text</label>
		<input type="text" class="form-control" name="card_text" value="<?= $product['card_text'] ?>">
	</div>
	
	<div class="form-group">
		<label>Description</label>
		<input type="text" class="form-control" name="description" value="<?= $product['description'] ?>">
	</div>

	<div class="form-group">
		<label>Size</label>
		<input type="text" class="form-control" name="size" value="<?= $product['size'] ?>">
	</div>

	<div class="form-group">
		<label>Image</label>
		<input type="text" class="form-control" name="image" value="<?= $product['image'] ?>">
	</div>

	<div class="form-group">
		<label>Price</label>
		<input type="text" class="form-control" name="price" value="<?= $product['price'] ?>">
	</div>

	<div class="form-group">
		<label>Quantity Available</label>
		<input type="text" class="form-control" name="quantityavailable" value="<?= $product['quantityavailable'] ?>">
	</div>

 
    <input type="submit"  class="btn btn-primary" value="Update Product">

</form>
</div>
</div>
</div>
</body>
</html>