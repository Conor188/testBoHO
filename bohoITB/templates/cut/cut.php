<!---<table>
    <tr>
        <th>(detail)</th>
        <th>ID</th>
        <th>description</th>
        <th>price</th>
		 <th>image</th>
        <th>(update)</th>
        <th>(delete)</th>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td>
                <a href="index.php?action=show&id=<?= $product['product_id'] ?>">
                (detail page)</a>
            </td>
            <td>
                <?= $product['product_id'] ?>
            </td>
            <td>
                <?= $product['name'] ?>
            </td>
            <td>
                <?= $product['description'] ?>
            </td>
            <td>
             <td><img src ="<?=  $product['image'] ?>"</td>
            <td>
                <a href="index.php?action=showUpdateProductForm&id=<?= $product['id'] ?>">
                    (UPDATE)</a>
            </td>
            <td>
                <a href="index.php?action=deleteProduct&id=<?= $product['id'] ?>">
                    (DELETE)</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table> 
-->

<p>

<form
    action="index.php"
    method="get"
>
    <input type="hidden" name="action" value="showNewProductForm">


</form>

</body>
</html>