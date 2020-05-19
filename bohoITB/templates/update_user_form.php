<?php
//-------- page header -------------------
$pageTitle = 'Update User Form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>

<div class="card">
  <div class="card-header bg-primary  text-center">
   <h5> UPDATE USER<h5>
  </div>
  <div class="card-body">
    <p class="card-text" >Form to USER details. Please click update USER button to save the changes</p>
  


<form
    action="index.php?action=updateUser" method="POST"
>
    <!-- ****** send ID, but don't let user see this ***** -->
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
	
	 <div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" value="<?= $user['username'] ?>">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="password" value="<?= $user['password'] ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?= $user['email'] ?>">
	</div>
	
	<div class="form-group">
		<label>Address</label>
		<input type="text" class="form-control" name="address" value="<?= $user['address'] ?>">
	</div>

	<div class="form-group">
		<label>Contact Number</label>
		<input type="text" class="form-control" name="contact" value="<?= $user['contact_number'] ?>">
	</div>

	

 
    <input type="submit"  class="btn btn-primary" value="Update User">

</form>
</div>
</div>
</div>
</body>
</html>