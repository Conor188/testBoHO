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


<div class="card">
  <div class="card-header">
    Password Reset
  </div>
  <div class="card-body">  
	
	
<form
    action="index.php?action=password" method="POST"
>
  <div class="form-group">
  <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"   value="<?= $user['email'] ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  value="<?= $user['email'] ?>">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary"   value="Update User">>Submit</button>
</form>
  
  
  
  
  
  
  
  </div>
</div>
	
	
	
</body>
</html>