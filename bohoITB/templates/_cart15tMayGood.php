<?php
		
require_once __DIR__ . '/_header.php';

	
$pageTitle = 'cart';

?>

 <div class="col-lg-9" >
        <div class="row">
			<div class="card mb-3" style="max-width: 800px;">
				<div class="row no-gutters">
				<table class="table">
				<thead class="thead-dark">
    
				<tr>
					<th scope="col-center" colspan="6">Your Shopping Cart  Item Are:</th>
						</tr>
						<tr>
      <th scope="col">Product ID </th>
	  <th scope="col">Product Name </th>	  
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub-Total</th>
	  <th scope="col">(Remove)</th>
   
  </thead>
  






















	
<?php
//-----------------------------LOOP Throough the items in the cart and display -------//
$total = 0;

$ListOneP = new USER();
//	$product = $ListOneP->get_one_product($id);

foreach($shoppingCart as $id=>$quantity):

    $product = $ListOneP->get_one_product($id);
    $price = $product['price'];
    $subTotal = $price * $quantity;
    $total += $subTotal;
//-----------------------------
?>
    <tbody>
	<tr>
	<td><?= $product['product_id'] ?></td>
	<td><?= $product['name'] ?></td>	
    <td>&euro; <?= $price ?></td>
    <td><?= $quantity ?></td>
    <td><?= $subTotal ?></td>
    <td><a href="index.php?action=removeFromCart&id=<?= $product['id'] ?>">(remove from cart)</a></td>
	<tr>
	
	
 

<?php
//-----------------------------
endforeach;
//-----------------------------
?>

    <tr>
        <td colspan="5">Total</td>
        <td>&euro; <?= $total ?></td>
    </tr>
</table>
</div>
</div>
</div>
</div>

<a href="index.php?action=emptyCart">EMPTY CART</a>
<br>
<a href="index.php?action=indexAction">Back to shop</a>
<br>





