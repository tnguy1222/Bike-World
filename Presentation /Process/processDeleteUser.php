<?php

require_once 'AutoLoader.php';

require_once 'header.php';


$id = $_GET['id'];

$ubs = new UserBusinessService();

$success = $ubs->deleteItem($id);

if($success)
{
    echo "Item deleted <br>";
}else{
    echo "Nothing change <br>";
}

echo "<a href='adminUsers.php'>Return to main page</a>";

?>