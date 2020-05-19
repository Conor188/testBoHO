<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>



<div class="card">
  <div class="card-header bg-info  text-center">
  <p class="h4 mb-4">CREATE PRODUCT FORM</p>
  </div>
  <div class="card-body">
   
    <p class="card-text">Please enter details below to create a new product and click on create product button.</p>
	
<form
    action="index.php?action=createNewProduct"
    method="POST"
	class="text-center border border-dark p-5"
>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control mb-4" name="name" id="exampleFormControlInput1" placeholder="Enter Product Name">
  </div>
  
  
  
  
  
  
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control mb-4"  name ="category" id="exampleFormControlSelect1" placeholder="Enter Product Name">
      <option value="" disabled selected hidden>Please choose category...</option>
	  <option  value="D">Dress</option>
      <option value="C">Coat</option>
      <option value="S">Tops & Shirts</option>
      <option value ="T">Trousers</option>
    </select>
	
	
 <div class="form-group">
    <label>Card Text</label>
    <input type="text" class="form-control mb-4"  name="card_text" id="exampleFormControlInput1" placeholder="Enter Card Text">
  </div>
 
  <div class="form-group">
    <label>Description </label>
    <input type="textarea" class="form-control mb-4"  name="description" id="exampleFormControlInput1" placeholder="Enter Card Description">
  </div>
  

 
 <div class="form-group">
    <label for="exampleFormControlSelect1">Size</label>
    <select class="form-control mb-4"  name ="size" id="exampleFormControlSelect1">
      <option value="" disabled selected hidden>Please choose a size...</option>
	  <option value="S">Small</option>
      <option value="M">Medium</option>
      <option value="L">Large</option>
    </select>
 
    <div class="form-group">
    <label>Image</label>
    <input type="text" class="form-control mb-4"  name="image" id="exampleFormControlInput1" placeholder="Enter name of image">
  </div>
 
   <div class="form-group">
    <label>Price</label>
    <input type="number" class="form-control mb-4"  name="price" id="exampleFormControlInput1" placeholder="Enter price of product">
  </div>
 
 
   <div class="form-group">
    <label>Quantity Available</label>
    <input type="number" class="form-control mb-4"  name="quantityavailable" id="exampleFormControlInput1" placeholder="Enter quanity available">
  </div>
 
 
  
      <input type="submit" class="btn btn-dark btn-block" value="Create Product">

</form>
	
  </div>
</div>