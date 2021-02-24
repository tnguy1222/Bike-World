<?php
require_once 'AutoLoader.php';

session_start();

$id = $_GET['id'];

if(isset($_SESSION['cart'])){
    
    
    $c = $_SESSION['cart'];
}else{
    if(isset($_SESSION['userid'])){
        $c = new Cart($_SESSION['userid']);
    }
    else{
        echo "Please login first <br>";
        exit;
    }
}

$c->removeItem($id);
$c->calcTotal();

//echo "<pre>";
//print_r($_SESSION['cart']);
//echo "</pre>";

$_SESSION['cart'] = $c;

header("Location:showCart.php");
