<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/_header.php';
//----------------------------------------
?>


<h1>Update product</h1>

<form
    action="index.php?action=updateProduct" method="POST"
>
    <!-- ****** send ID, but don't let user see this ***** -->
    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <p>
        <label>Description:</label>
        <input type="text" name="description" value="<?= $product['description'] ?>">
    </p>

    <p>
        <label>Price:</label>
        <input type="text" name="price" value="<?= $product['price'] ?>">
    </p>


    <input type="submit" value="Update Product">

</form>


</body>
</html>