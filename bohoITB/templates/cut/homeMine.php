<?php

	require_once("../src/sessions.php");
	require_once("../src/function.php");
	
	//create a new instance of the user class
	
	$auth_user = new USER();
	//set the user_id for this session
	$user_id = $_session['user_session'];
	//run the sql statement that selects all the users from the user table that have the id that corresponds to the user that is logging instance
	$stmt= $auth_user->runQuery("SELECT * from users WHERE id=$user_id");
	$stmt->execute (array(":user_id"->$user_id));
	//return the row in the database in an associative array
	$userRow=$stmt->fetch(PD0::FETCH_ASSOC);
	
	?>
	<!doctype html>
	<html><head>
	<title></title>
	<style> @import "style2.css"; </style>
	
	</head>
	
	<body>   <!---- Print the username to the screen of the logged-in user--->
	
		<h1> welcome: <?php print($userRow['user_name']); ?></h1>
		
		<h2> this is the home page of the site that the user can now interact with </h2>
		
		</body>
		</html>
		
		
	