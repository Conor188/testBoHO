<?php

$connection = mysqli_connect("localhost", "martina", "atkinson");
	$db = mysqli_select_db($connection, 'projectdb');
if(isset($_POST['insertdata']))
{
		$fname= $_POST['fname'];
		$lname= $_POST['lname'];
		$course= $_POST['course'];
		$contact= $_POST['contact'];
		
		$query ="INSERT INTO student('fname', 'lname', 'course', 'contact') VALUES ('$fname', '$lname', '$course', '$contact')";
		
		
		$query_run= mysqli_query($connection, $query);
		
		if($query_run)
		{
			
			
			echo '<script> alert("Data Saved"); </script>';
			header('Location: admin.php');
		}
		else
		{
			echo '<script> alert("Data Not Saved"); </script>';
		}
		
		
}


?>

