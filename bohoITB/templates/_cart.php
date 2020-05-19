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

if (!isset($shoppingcart)){
   $shoppingCart = getShoppingCart();
}
	
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
    <td><a href="index.php?action=removeFromCart&id=<?= $product['product_id'] ?>" type="button" class="btn btn-warning btn-sm">REMOVE</button></a></td>

	
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

		<td colspan="4"><a href="index.php?action=emptyCart" button type="button" class="btn btn-danger btn-sm">EMPTY CART</button></a></td>
		<td><a href="index.php?action=indexAction" button type="button" class="btn btn-secondary btn-sm">Back to shop</button></a></td>



	</tr>
	</table>

<td><a href="index.php?action=savebasket" button type="button" class="btn btn-secondary btn-sm">Save Cart</button></a></td>
<td><a href="index.php?action=checkout" button type="button" class="btn btn-secondary btn-sm">Checkout</button></a></td>


</div>
</div>
</div>
</div>




