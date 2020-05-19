<?php

	//require_once("session.php");
	require_once("../src/functions.php");
		
	//create a new instance of the user class
	
	$auth_user = new USER();
	//set the user_id for this session
	$user_id = $_SESSION['user_session'];
	$userRow = $auth_user->get_one_user($user_id);
	$basket =  $auth_user->get_basket_from_DB($user_id);
	$sales =   $auth_user->get_sales_from_DB($user_id);

    if (isset($_SESSION['shoppingCart'])){
		unset($_SESSION['shoppingCart']);
    }

    $shoppingCart = getShoppingCart();
	foreach ($basket as $bk):
		$pid = $bk->product_id;
		$oldTotal = 0;
		if(isset($shoppingCart[$pid])){
			$oldTotal = $shoppingCart[$pid];
		}
		$shoppingCart[$pid] = $oldTotal + 1;

    endforeach;

	$_SESSION['shoppingCart'] = $shoppingCart;
			  
	//run the sql statement that selects all the users from the user table that have the id that corresponds to the user that is logging in
	//$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id=:id");
	//$stmt->execute(array(":id"=>$user_id));
	//return the row in the database in an associative array
	//$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

	
?>

<?php require_once __DIR__ . '/../templates/_header.php';
?>
</head>

<body>   <!-----------Print the username to the screen of the logged-in user----->
<div class="card">
  <div class="card-header">
    SIGN IN DETAILS :  Welcome  <?php print($userRow['username']); ?>
  </div>
  <div class="card-body">
    
	
	
	<table class="table table-borderless">
	
	
	<tbody>
	
	<tr>
		<th scope "row">Email: </th>
		<td> <?php print($userRow['email']); ?></td>
	</tr>
	<tr>
		<th scope "row">Password:</th>
		<td> ******************</td>
	</tr>
	
	
	</tbody>
   </table> 
   
  
  <form action="welcome.php" method="post"  action="index.php?action=password>
PASSWORD: <input type="text" name="testpass"><br>
<input type="submit">

  <div class="form-group ">
    <label form="newpassword" class="sr-only">Password</label>
    <input type="password"  id="newpassword" name ="newpassword" placeholder="Password">
	<a class="btn btn-primary button-sm" href="http:/index.php?action=password">RESET PASSWORD</a>
	
  </div>
</form>
   
  
<br>

    
    <div class="card">
  <div class="card-header">
    BILLING DETAILS: 
  </div>
  <div class="card-body">
    
	
	
	<table class="table table-borderless">
	
	<thead>
	<tr>
	<th scope="col">Account </th>
	<th scope="col">Details </th>
	</tr>
	</thead>
	<tbody>
	
	<tr>
		<th scope "row">ID Number: </th>
		<td> <?php print($userRow['id']); ?></td>
	</tr>
	<tr>
		<th scope "row">Name:</th>
		<td> <?php print($userRow['username']); ?></td>
	</tr>
	
		<th scope "row">Address:</th>
		<td> <?php print($userRow['address']); ?></td>
	</tr>
	<tr>
		<th scope "row">Contact Number:</th>
		<td> <?php print($userRow['contact_number']); ?></td>
	</tr>
	
	</tbody>
   </table> 
   <a class="btn btn-primary" href="index.php?action=userdetails">EDIT DETAILS</a>

  </div>  
</div>
</div>
<table class="table table-bordered" >
  <thead>
 		<tr>
				<th scope="col">Your Previous Orders</th>
			<tr>
			  <th scope="col">Product ID</th>
			  <th scope="col">Quantity</th>
			  <th scope="col">Price</th>
			  <th scope="col">Date</th>
			</tr> 
    </tr>
  </thead>
  <tbody>
   
	  <?php foreach ($sales as $sale ): ?>
		<tr>
	          <td>
                <?= $sale->product_id ?>
            </td>
            <td>
                <?= $sale->quantity ?>
            </td>
            <td>
                <?= $sale->price ?>    
	        </td>
            <td>
                <?= $sale->saledate ?>    
	        </td>
		</tr>
   <?php endforeach; ?>
  </tbody>
</table>




















 
</div>
</body>
</html>