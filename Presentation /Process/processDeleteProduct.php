<?php

require_once 'AutoLoader.php';

require_once 'header.php';


$id = $_GET['id'];

$pbs = new ProductBusinessService();

$success = $pbs->deleteItem($id);

if($success)
{
    echo "Item deleted <br>";
}else{
    echo "Nothing change <br>";
}

echo "<a href='adminProducts.php'>Return to main page</a>";

?>