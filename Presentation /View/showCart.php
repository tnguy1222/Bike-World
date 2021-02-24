<?php 
require_once 'AutoLoader.php';

require_once 'header.php';
include_once 'style.css';
?>

<table id="customers">
<tr>
    <tH>
    PRODUCT ID
    </tH>
    <tH>
    PRODUCT NAME
    </tH>
    <tH>
    DESCRIPTION
    </tH>
    <tH>
    QUANTITY
    </tH>
    <tH>
    PRICE
    </tH>
    <tH>
    SUBTOTAL
    </tH>
    <tH>
    BUTTON
    </tH>
</tr>
<?php

$productBS = new ProductBusinessService();
$userBS = new UserBusinessService();

if(isset($_SESSION['cart'])){
    $c = $_SESSION['cart'];
}else{
    echo "Cart is empty <br>";
    exit;
}

if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}else{
    echo "User isn't logged in <br>";
    exit;
}

//check if cart belongs to user
if(! $c->getUserId() == $userid){
    echo "Cart does not belong to user.Please login and try again! <br>";
    exit;
}

$user = $userBS->findByID($userid);
//show the message to user
echo "<h2>View Cart</h2>";
echo "Cart for user ". $user->getFirstname();

foreach($c->getItems() as $product_id => $qty){
    if($qty != 0){
    $product = $productBS->findByID($product_id);
    echo "<tr>";
    echo "<td>". $product->getId() ."</td>";
    echo "<td>". $product->getProductname() . "</td>";
    echo "<td>". $product->getDescription() . "</td>";
    //echo "<td>" .$product->getPhoto() ."</td>";
    echo "<td>". $qty ."</td>";
    echo "<td>" .money_format('%.2n',$product->getPrice()) ."</td>";
    echo "<td>" .money_format('%.2n',$qty * $product->getPrice()) ."</td>";
    echo "<td><form action='processRemoveFromCart.php'><input type='hidden' name='id' value=". $product->getId() ."><input type='submit' value='Remove'></form></td>";
    echo "</tr>";
    }
}
echo "</table>";
//future development
echo "<h3>Total: ". money_format('%.2n',$c->getTotal_price()) ."<h3>";
echo "<a class='btn btn-primary' href='adminProducts.php'>Continue to shop</a>";
echo "<a class='btn btn-primary' href='processCheckout.php'>Check Out</a>";
?>
</table>
