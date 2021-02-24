<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class OrderDataService{
    
    function createOrder($order, $connection){
        $db = new Database();
        $connection = $db->getConnection();
        
        $statement = $connection->prepare("INSERT INTO orders (id, date, users_id, total) VALUES (NULL, ?, ?, ?)");
        if(!$statement){
            echo "Something wrong in the sql error?";
            exit;
        }
        
        
        $order_id  = $order->getId();
        $od = $order->getDate();
        $ui = $order->getUsers_id();
        $ot = $order->getTotal();
        
        echo "<pre>";
        print_r("$od" .",".$ui.",".$ot.",".$order_id);
        echo "</pre>";
        
        $statement->bind_param("sii", $od, $ui, $ot);
        $result =  $statement->execute();
        
        if($result){
            
            return $connection->insert_id;
            
        }else{
            return -1;
            
        }
    }
    
    function addDetailsLine($order_id, $orderDetails, $connection){
       
        $statement = $connection->prepare("INSERT INTO orderdetails (quantity, currentprice, currentdescription, orders_id, products_id) VALUES ( ?, ?, ?, ?, ?)");
        if(!$statement){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        
        $quantity = $orderDetails->getQuantity();
        $price = $orderDetails->getCurrentprice();
        $description = $orderDetails->getCurrentdescription();
        $product_id = $orderDetails->getProducts_id();
        echo "<pre>";
        print_r("$quantity" .",".$price.",".$description.",".$order_id .",". $product_id);
        echo "</pre>";
        
        $statement->bind_param("idsii",$quantity, $price, $description, $order_id, $product_id);
        $statement->execute();
        
        if($statement->affected_rows > 0){
            
            return $connection->insert_id;
        }else{
            
            
            return -1;
        }
    }
    
    function getOrdersBetweenDates($date1, $date2){
        $db = new Database();
        
        //connects to the database
        $connection = $db->getConnection();
        
        //create prepared statement
        $stmt = $connection->prepare("SELECT
            orders.id AS 'ordersid',
            products.productname,
            orderdetails.quantity,
            orderdetails.currentprice,
            ROUND(orderdetails.quantity * orderdetails.currentprice, 2) AS `SUBTOTAL`
            FROM orderdetails
            JOIN orders ON orders.id = orderdetails.orders_id
            JOIN users ON users.id = orders.users_id
            JOIN products ON products.id = orderdetails.products_id
            WHERE orders.date BETWEEN ? AND ?
            ORDER BY SUBTOTAL ASC");
        //echo $connection -> error;die;
        //bind the data and execute the prepared statment
        $stmt->bind_param("ss", $date1, $date2);
        $stmt->execute();
        $result = $stmt->get_result();
        
        //checks if result didn't work
        if (!$result) {
            echo "assume the SQL statement has an error";
            return null;
            exit;
        }
        
        //checks if there were results found
        if ($result->num_rows == 0) {
            return null;
        }
        else {
            $orders_array = array();
            while ($order= $result->fetch_assoc()){
                
                array_push($orders_array, $order);
                
            }
            
            return $orders_array;
        }
    }
    
}