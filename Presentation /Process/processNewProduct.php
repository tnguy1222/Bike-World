<?php 

require_once 'AutoLoader.php';

if(isset($_POST)){
    
    
    $productname = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
}else{
    echo "Nothing is submitted. Please try again";
}
//send a new user object to business service;

$pbs = new ProductBusinessService();

$product = new Product(0, $productname, $description, $price);

if($pbs->makeNew($product)){
    echo "Item inserted .<br>";
}else{
    echo "Nothing inserted .<br>";
}
echo "<a href='adminProducts.php'>Return to main page</a>";

?>
