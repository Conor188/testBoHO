<?php

	//require_once("session.php");
	require_once("../src/functions.php");
	
	
	//create a new instance of the user class
	
	$auth_user = new USER();
	//set the user_id for this session
	$user_id = $_SESSION['user_session'];
	//run the sql statement that selects all the users from the user table that have the id that corresponds to the user that is logging in
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id=:id");
	$stmt->execute(array(":id"=>$user_id));
	//return the row in the database in an associative array
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

	
	
?>

<?php require_once __DIR__ . '/../templates/_header.php';
?>
</head>

<body>   <!-----------Print the username to the screen of the logged-in user----->
<div class="row">
<vi       
 <div class="card">
  <div class="card-header">
    Welcome: <?php print($userRow['username']); ?>
  </div>
  <div class="card-body">
    
	
	
	<table class="table">
	
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
		<th scope "row">Username:</th>
		<td> <?php print($userRow['username']); ?></td>
	</tr>
	<tr>
		<th scope "row">Mail:</th>
		<td> <?php print($userRow['email']); ?></td>
	<tr>
		<th scope "row">Address:</th>
		<td> <?php print($userRow['address']); ?></td>
	</tr>
	<tr>
		<th scope "row">Contact Number:</th>
		<td> <?php print($userRow['contact_number']); ?></td>
	</tr>
	
	</tbody>
   </table> 
   <a href="#" class="btn btn-primary">Edit Details</a>
  </div>
</div>      
    <div class="card">
  <div class="card-header">
    Welcome: <?php print($userRow['username']); ?>
  </div>
  <div class="card-body">
    
	
	
	<table class="table">
	
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
		<th scope "row">Username:</th>
		<td> <?php print($userRow['username']); ?></td>
	</tr>
	<tr>
		<th scope "row">Mail:</th>
		<td> <?php print($userRow['email']); ?></td>
	<tr>
		<th scope "row">Address:</th>
		<td> <?php print($userRow['address']); ?></td>
	</tr>
	<tr>
		<th scope "row">Contact Number:</th>
		<td> <?php print($userRow['contact_number']); ?></td>
	</tr>
	
	</tbody>
   </table> 
   <a href="#" class="btn btn-primary">Edit Details</a>
  </div>  
</body>
</html>