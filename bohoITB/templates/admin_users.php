<?php
//-------- page header -------------------
$pageTitle = 'list all products';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>


 <div class="col-lg-9" align="center">
<h5>ADMINISTRATOR - PRODUCT DETAILS</h5>

<p> click below to create a product</p>
	
         <a href="index.php?action=showNewProductForm"  button type="button" class="btn btn-success btn-sm " role="button">
                CREATE USER</a>
				
        <div class="row">



 <div class="row">


  
				

				



<table class="table table-bordered" >
  <thead>
 
    <tr>
      <th scope="col">Detail</th>
	   <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
     
	 
    </tr>
  </thead>
  <tbody>
    <tr>
	
	  <?php foreach ($users as $user): ?>
             <td>
                <a href="index.php?action=show&id=<?= $product['product_id'] ?>"  class="btn btn-dark btn-sm" role="button">
                DETAILS</a>

			</td>
			 <td>
                <a href="index.php?action=showUpdateProductForm&id=<?= $product['product_id'] ?>"  class="btn btn-primary btn-sm" role="button">
                    UPDATE</a>
            </td>
             <td>
                <a href="index.php?action=deleteProduct&id=<?= $product['product_id'] ?>"  <a href="#" class="btn btn-danger btn-sm" role="button"  >DELETE</a>
                   </a>
            </td>
			
			
			
			
			
			
			<td>
                <?= $user['id'] ?>
            </td>
            <td>
                <?= $user['username'] ?>
            </td>
           
            
			
         
      
            
          
           
    </tr>
    
  </tbody>
   <?php endforeach; ?>
</table>


<p>
<!---
<form
    action="index.php"
    method="get"
>
    <input type="hidden" name="action" value="showNewProductForm">



</form>

-->


</div>
</div>
</body>
</html>