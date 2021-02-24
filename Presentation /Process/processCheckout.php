<?php
include_once 'AutoLoader.php';
include_once 'header.php';

if( isset($_SESSION['cart']) && isset($_SESSION['userid'])){
    $c = $_SESSION['cart'];
}else{
    echo "There is something wrong please try again"; 
    exit;
}

//$items = $c->getItems();
$total = $c->getTotal_price();

$order = new Order(null, date("Y/m/d h:i:sa"), $_SESSION['userid'], $total);


$orderbs =  new OrderBusinessService();
$productbs = new ProductBusinessService();
$productbs->showAll();

//$orderbs->checkOut($order, $c);


?>

<?php 

echo "<table id='customers'>";
?>
<tr>
	<tH>Product ID</tH>
	<tH>Name</tH>
	<tH>Quantity</tH>
	<tH>Price</tH>
	<tH>Total</tH>
<tr>
<?php 
echo "<h2>Check Out Page</h2>";
foreach($c->getItems() as $product_id => $qty){
    if($qty!= 0){
    $product = $productbs->findByID($product_id);
    echo "<tr>";
    echo "<td>". $product->getId() ."</td>";
    echo "<td>". $product->getProductname() . "</td>";
    //echo "<td>" .$product->getPhoto() ."</td>";
    echo "<td>". $qty ."</td>";
    echo "<td>" .money_format('%.2n',$product->getPrice()) ."</td>";
    echo "<td>" .money_format('%.2n',$product->getPrice()) * $qty."</td>";
    echo "</tr>";
    }
}
?>
<?php 


echo "</table>";
echo "<h3> Total Price : ". money_format('%.2n',$total) . "</h3>";

include_once 'creditCardForm.php';
?>


