<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>



<div class="card">
  <div class="card-header bg-info  text-center">
  <p class="h4 mb-4">CREATE USER FORM</p>
  </div>
  <div class="card-body">
   
    <p class="card-text">Please enter details below to create a new USER and click on create product button.</p>
	
<form
    action="index.php?action=createNewUser"
    method="POST"
>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control mb-4" name="name" id="exampleFormControlInput1" placeholder="Enter Username">
  </div>
  
    <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control mb-4" name="password" id="exampleFormControlInput1" placeholder="Enter Password">
	</div>
  
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control mb-4" name="address" id="exampleFormControlInput1" placeholder="Enter Address">
	</div>
  
  
    <div class="form-group">
    <label>Contact Number</label>
    <input type="text" class="form-control mb-4" name="contact_number" id="exampleFormControlInput1" placeholder="Enter Contact Number">
	</div>
  
  
 

 
 
   
 
 
  
      <input type="submit" class="btn btn-success" value="Create User">

</form>
	
  </div>
</div>