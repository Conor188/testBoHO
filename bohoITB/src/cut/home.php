<?php
	require_once("sessions.php");
	require_once("functions.php");
	require_once("dbconfig.php");
	
	//create a new instance of the user class
	
	$auth_user = new USER();
	//set the user_id for the session
	$user_id = $_SESSION['user_session'];
	//run the sql statement that selects all the users from the user table that have the id that corresponds to the user that is logging instance
	$stmt = $auth_user->runQuery("SELECT * from users WHERE user_id=:user_id");
	$stmt->execute (array(":user_id"=>$user_id));
	//return the row in the database in an associative array
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	
	?>
	
	<!doctype html>
	<html><head>
	<title></title>
	
	<style> @import "style2.css"; </style>
	<?php require_once __DIR__ . '/_header.php';
?>
	</head>
	
	<body> <!-----print the username to the screen of the logged-in user--->
	
		<h1>welcome : <?php print($userRow['user_name']); ?></h1>
		<h2> this is the home page of the site that the user can now interact with </h2>
	</body>
	</html>
	
	