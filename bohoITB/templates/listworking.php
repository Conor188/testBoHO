<?php
		
	
	require_once __DIR__ . '/_header.php';

	require_once __DIR__ . '/../src/connect.php';	
	$connection = new Connection();
	$db =$connection->openConnection();
	$products =$connection->get_all_products($db);	
	var_dump($products);
	foreach ($products as $pat) {

echo $pat['title']."<br>";


echo $pat['description'];
	}
	
	

	

$pageTitle = 'list Page';






	




	

  //Modal code//
	
				
		//require_once __DIR__ . '/_footer.php';
		//require_once __DIR__ . '/_modal.php';
	
	
