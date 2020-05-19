<?php
//-------- page header -------------------
$pageTitle = 'list all products';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>


 <div class="col-lg-9" align="center">
		
        
        <div class="row">




<table class="table table-bordered">
  <thead>
 
    <tr>
      <th scope="col">Detail</th>
	   <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
	 
    </tr>
  </thead>
  <tbody>
    <tr>
	
	  <?php foreach ($products as $product): ?>
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
                <?= $product['product_id'] ?>
            </td>
            <td>
                <?= $product['name'] ?>
            </td>
           
            <td>
			
         
      
             <img src ="<?=  $product['image'] ?> "class="img-thumbnail"></td>
          
           
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