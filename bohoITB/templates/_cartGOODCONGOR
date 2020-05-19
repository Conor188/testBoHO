
<hr>
<h3>shopping cart</h3>
<h1> The items in your cart are: </h1>
<table>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>sub-total</th>
        <th>(remove)</th>
    </tr>
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
    <tr>
    <td><?= $product['description'] ?></td>
    <td>&euro; <?= $price ?></td>
    <td><?= $quantity ?></td>
    <td><?= $subTotal ?></td>
    <td><a href="index.php?action=removeFromCart&id=<?= $product['product_id'] ?>">(remove from cart)</a></td>

    </tr>

<?php
//-----------------------------
endforeach;
//-----------------------------
?>

    <tr>
        <td colspan="3">Total</td>
        <td>&euro; <?= $total ?></td>
    </tr>

</table>

<a href="index.php?action=emptyCart">EMPTY CART</a>
<br>
<a href="index.php?action=index_Action">Back to shop</a>
<br>
