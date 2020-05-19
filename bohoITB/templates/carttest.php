<?php
//--------------------------------
require_once '_header.php';
//--------------------------------
?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<div class="container">
<h1>My Great eCommerce Shop</h1>
  <table class="table table-bordered">
<thead>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>(add to cart/session)</th>
    </tr>
	 </thead>
<?php
//-----------------------------LOOP THROUGH THE ITEMS RETURNED --->

foreach($products as $product):
//-----------------------------
?>
   <tbody>
    <tr>
	    <td><?= $product['description'] ?></td>
    <td>&euro; <?= $product['price'] ?></td>
    <td><a href="index.php?action=addToCart&id=<?= $product['id'] ?>">(add to cart/session)</a></td>
    </tr>
	

<?php
//-----------------------------
endforeach;
//-----------------------------
?>
</table>
</div>


<?php
//--------------------------------
require_once '_cart.php';
//--------------------------------
?>


