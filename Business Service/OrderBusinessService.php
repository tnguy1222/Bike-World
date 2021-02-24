<?php

include_once 'AutoLoader.php';

class OrderBusinessService{
    
    function checkOut($order, $cart){
        
        //create a order. This is executred by newItem in OrderDataService
        //create new items in order details table. This is executred by addDetailsLine in OrderDataService
        //ensure the transaction is atomic
        
        $db = new Database();
        $connection = $db->getConnection();
        
        $connection->autocommit(FALSE);
        $connection->begin_transaction();
        
        //create a new instance of the service classes
        
        $productbs = new ProductBusinessService();
        $orderds = new OrderDataService();
        
        //check if the order input was a success
        $newOrderId = $orderds->createOrder($order, $connection);
        
        
        //loop to get the product attributes from cart
        foreach($cart->getItems() as $item => $qty) {
            $product = $productbs->findByID($item);
            $quantity = $qty;
            $price = $product->getPrice();
            $description = $product->getProductname();
            $products_id = $product->getId();
            
            $orderDetails = new Orderdetail(null, $quantity, $price, $description, $newOrderId, $products_id);
            
            $newOrderDetailsId = $orderds->addDetailsLine($newOrderId, $orderDetails, $connection);
            
            $newOrderDetailsSuccess = false;
            
            
            //check if each order detail was added
            if ($newOrderDetailsId){
                $newOrderDetailsSuccess = true;
                $connection->commit();
            }
            else {
                $newOrderDetailsSuccess = false;
                $connection->rollback();
            }
            
        }
        
        //check if the order and order details were added to the database
        if ($newOrderId && $newOrderDetailsSuccess) {
            echo "Success! Order is now being processed!<br>";
            $connection->commit();
            
        }
        else {
            echo "Failure! Order cannot be processed!<br>";
            $connection->rollback();
        }
        
        //close the connection to the database
        $connection->close();
    }
    function makeNew($order, $connection){
       
        $dbService = new OrderDataService();
        return $dbService->createOrder($order, $connection);
    }
    
    function getAll(){
        
        $dbService = new OrderDataService();
        $orders = $dbService->getAllOrders();
        return $orders;
        
    }
    
    function deleteItem($id){
        $dbService = new OrderDataService();
        return $dbService->deleteOrder($id);
    }
    
    function findById($id){
        $dbService = new OrderDataService();
        $order = $dbService->findById($id);
        
        return $order;
    }
    
    function updateOne($id, $order){
        $dbService = new OrderDataService();
        
        return $dbService->updateOrder($id, $order);
    }
    
    function getOrderDetails($id){
        $dbService = new OrderDataService();
        return $dbService->getOrderDetails($id);
    }
    
    function getOrdersBetweenDates($date1, $date2){
        $dbService = new OrderDataService();
        return $dbService->getOrdersBetweenDates($date1, $date2);
    }
}