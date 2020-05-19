<?php

//we will be using sessions
session_start();

require_once("../src/functions.php");

//create a new instance of the user
$login = new User();

if(isset($_POST['submit']))

{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
	
	//call this function from the login_functions file that verifies the user
	if($login->checkLogin($uname, $umail, $upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>

<!--------------the else part of the program that is html--->

<!DOCTYPE>
<html>
<head>
<title>Login page</title>
<style>@import "style2.css"; </style>
</head>
<body>
<form method="post" id="login-form" align = "center">
<h2>Login Page</h2>
<!-------Format the error in css ---->

	<div id ="error">
	<?php
		if (isset($error))
		{
			?>
			<div class="alert alert-danger">
			<?php echo $error; ?> 
	</div>
			<?php
			
		}
		?>
		<input type="text" name="txt_uname_email" placeholder="Username or E Mail ID">
		<br>
		<input type="password" class="form-control" name="txt_password" placeholder="Your Password">
		<br>
		<input type="submit" name="submit" class="btn btn-default">
		<br>
		<label>Don't have account yet! <a href="register.php">Sign UP</a></label>
		</form>
	</body>
	</html>