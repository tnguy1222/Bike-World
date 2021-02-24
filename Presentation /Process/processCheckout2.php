<?php
require_once 'AutoLoader.php';
require_once 'header.php';

if( isset($_SESSION['cart']) && isset($_SESSION['userid'])){
    $c = $_SESSION['cart'];
}else{
    echo "There is something wrong please try again";
    exit;
}

require_once 'processCheckCredit.php';


$items = $c->getItems();
$total = $c->getTotal_price();

$order = new Order(null, date("Y/m/d h:i:sa"), $_SESSION['userid'], $total);

$orderbs =  new OrderBusinessService();

//$orderbs->makeNew($order, $connection);
$orderbs->checkOut($order, $c);
echo "Check out successful!"; 

//empty the cart of its contents
empty($_SESSION['cart']);
$_SESSION['cart'] = new Cart($_SESSION['userid']);
?>