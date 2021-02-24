<?php
include_once 'AutoLoader.php';
include 'header.php';
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
?>
<h2> Search Result</h2>
<p>Result<p>



<?php 

if($orders){
    //we got some results
    include('_displayOrderReport.php');
}else{
    echo 'No result found <br>';
}

?>
