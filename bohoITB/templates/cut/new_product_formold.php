<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>


<h1>Create a new product</h1>

<form
    action="index.php?action=createNewProduct"
    method="POST"
>


    <p>
        <label>Description:</label>
        <input type="text" name="description">
    </p>

    <p>
        <label>Price:</label>
        <input type="text" name="price">
    </p>
	

    <input type="submit" value="Create New Product">

</form>


</body>
</html>