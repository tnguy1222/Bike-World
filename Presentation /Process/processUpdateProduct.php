<?php 

require_once 'AutoLoader.php';



if(isset($_POST)){
    
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
}else{
    echo "Nothing is submitted. Please try again";
}
//send a new user object to business service;

$pbs = new ProductBusinessService();

$product = new Product(0, $productname, $description, $price);

if($pbs->updateItem($id, $product)){
    echo "Item updated .<br>";
}else{
    echo "Nothing change .<br>";
}
echo "<a href='adminProducts.php'>Return to main page</a>";

?>
