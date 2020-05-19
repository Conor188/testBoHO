<?php
// start session
session_start();

// connect to database
include '../src/product_functions.php';

// get database connection
$connection = connect_to_db();

// include page header html
include '_header.php';

if(count($_SESSION['shoppingCart'])>0){

	// get the product ids
	$id = array();
	foreach($_SESSION['shoppingCart'] as $id=>$value){
		array_push($id, $id);
	}

	$stmt=$product->readByIds($id);

	$total=0;
	$item_count=0;

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

		$quantity=$_SESSION['shoppingCart'][$id]['quantity'];
		$sub_total=$price*$quantity;

		//echo "<div class='product-id' style='display:none;'>{$id}</div>";
		//echo "<div class='product-name'>{$name}</div>";

		// =================
		echo "<div class='cart-row'>";
			echo "<div class='col-md-8'>";

				echo "<div class='product-name m-b-10px'><h4>{$name}</h4></div>";
                echo $quantity>1 ? "<div>{$quantity} items</div>" : "<div>{$quantity} item</div>";

			echo "</div>";

			echo "<div class='col-md-4'>";
				echo "<h4>&#36;" . number_format($price, 2, '.', ',') . "</h4>";
			echo "</div>";
		echo "</div>";
		// =================

		$item_count += $quantity;
		$total+=$sub_total;
	}

	// echo "<div class='col-md-8'></div>";
	echo "<div class='col-md-12 text-align-center'>";
		echo "<div class='cart-row'>";
            if($item_count>1){
    			echo "<h4 class='m-b-10px'>Total ({$item_count} items)</h4>";
            }else{
                echo "<h4 class='m-b-10px'>Total ({$item_count} item)</h4>";
            }
			echo "<h4>&#36;" . number_format($total, 2, '.', ',') . "</h4>";
	        echo "<a href='place_order.php' class='btn btn-lg btn-success m-b-10px'>";
	        	echo "<span class='glyphicon glyphicon-shopping-cart'></span> Place Order";
	        echo "</a>";
		echo "</div>";
	echo "</div>";

}

else{
	echo "<div class='col-md-12'>";
		echo "<div class='alert alert-danger'>";
			echo "No products found in your cart!";
		echo "</div>";
	echo "</div>";
}

include '_cart.php';
?>
