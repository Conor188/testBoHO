<?php
		
	
	
	require_once __DIR__ . '/_header.php';
	//require_once __DIR__ . '/../src/product_functions.php';	
	//$connection = new Connection();
	//$db =$connection->openConnection();
//$products =$connection->get_all_products($db);//
	


?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"</script>


<!--end of details modal-->
<body>
<!-- Button trigger modal -->
  Launch demo modal

<h1>martina</h2>
<!-- Modal -->
<div class="modal fade" id="studentaddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	<form action="insertcode.php" method="POST">

	 <div class="modal-body">
	
					
			  <div class="form-group">
				<label>First Name</label>
				<input type="text" name="fname" class="form-control" placeholder="Enter First Name">
				</div>
				
				
			  <div class="form-group">
				<label>Last Name</label> 
				<input type="text" name="lname" class="form-control" placeholder "Enter Last Name">
			  </div>
			  
			  <div class="form-group">
			  <label>Course</label>
				<input type="text" name="course" class="form-control" placeholder="Enter Course">				
			  </div>
			  
			   <div class="form-group">
			   <label>Phone Number</label>
			  <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
			  </div> 
			  
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
      </div>
	  </form>
    </div>
  </div>
</div>












<div class="container">
	<div class="jumbotron">
		<div card="card">
			<h2>PHP CRUD BOOTSTRAP MODAL (POP UP MODAL></h2>
		</div>
	<div class="card">
		<div class="card-body">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddModal">
ADD DATA </button>
				
		</div>
	</div>
</div>
</div>






<div


</body>
</html>
