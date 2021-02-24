<?php
include_once 'AutoLoader.php';

$date1 = $_GET['startdate'];
$date2 = $_GET['enddate'];

$orderbs = new OrderBusinessService();
$userbs = new UserBusinessService();

$orders = $orderbs->getOrdersBetweenDates($date1, $date2);

if($orders == null){
    echo "Sorry. No order found in that range <br>";
    exit;
}

/*
echo "<pre>";
print_r($orders);
echo "</pre>";
*/
echo "Order Report JSON format: <br>";
echo json_encode($orders);
?>
