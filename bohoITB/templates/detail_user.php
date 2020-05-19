<?php
//-------- page header -------------------
$pageTitle = 'show details of one product';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>
 <div class="col-lg-9" >
		
        
        <div class="row">


 
  <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
 
    <div class="col-md-7">
	 <h5 class="card-title">SIGN IN DETAILS</h5>
	<p>Customer ID:     <?=$user['id'] ?></p>
	<p>Username:   <?=$user['username'] ?></p>
	<p>Email:   <?=$user['email'] ?></p>
	
	
    </div>
    <div class="col-md-5">
      <div class="card-body">
 
 <h5 class="card-title">Billing Details </h5>
 
 <p>Address: <?=$user['address'] ?>
 
 <p>Contact Number :  <?=$user['contact_number'] ?>
 <br>
	



							</div>	
					</div>
				</form>
	  
	  
	  </div>
    </div>
  </div>
</div>

</div>
<?php 
		require_once __DIR__ . '/_footer.php';
		
	?>


</body>
</html>