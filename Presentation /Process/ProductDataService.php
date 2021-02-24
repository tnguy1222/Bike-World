<?php
require_once 'functions.php';
dbconnect();

require_once 'Database.php';
class ProductDataService{
    function findByProductName($n){
        
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("SELECT id, productname, description, price FROM products WHERE productname LIKE ?");
        
        if(!$statement){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        /*bingding paramenters for markers */
        $like_n = "%". $n ."%";
        $statement->bind_param("s", $like_n);
        
        $statement->execute();
        
        $result = $statement->get_result();
        
        if(!$result){
            echo "Assume the SQL statement has an error";
            return null;
            exit;
        }
        
        if($result->num_rows ==0){
            return null;
        }else{
            $product_array = array();
            
            while($product = $result->fetch_assoc()){
                array_push($product_array, $product);
            }
            
            return $product_array;
        }
    }

    function findByID($id){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("SELECT * FROM products WHERE id = ? LIMIT 1");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        /*bind parameters for markers */
        
        $statement->bind_param("i", $id);
        
        $statement->execute();
        
        $result = $statement->get_result();
        
        if(!$result){
            echo "Assume the SQL statement has an error";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }else{
            $product_array = array();
            
            while($p = $result->fetch_assoc()){
                array_push($product_array, $p);
            }
            $p = new Product($product_array[0]['id'], $product_array[0]['productname'], $product_array[0]['description'], $product_array[0]['price']);
            return $p;
        }
        
    }
    
    function makeNew($product){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("INSERT INTO products ( productname, description, price) VALUES (?,?,?)");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        $pn = $product->getProductname();
        $pd = $product->getDescription();
        $pp = $product->getPrice();
        
        $statement->bind_param("ssd", $pn, $pd, $pp);
        $statement->execute();
        
        if($statement->affected_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function updateItem($id,$product){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("UPDATE products SET productname = ?, description = ?, price = ? WHERE id = '$id'");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        $pn = $product->getProductname();
        $pd = $product->getDescription();
        $pp = $product->getPrice();
        
        $statement->bind_param("ssd", $pn, $pd, $pp);
        $statement->execute();
        
        if($statement->affected_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function deleteItem($id){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("DELETE FROM products  WHERE id = ? LIMIT 1");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        $statement->bind_param("s", $id);
        $statement->execute();
        
        if($statement->affected_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function showAll(){
        //return an array of person that in the database
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("SELECT * FROM products");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        $statement->execute();
        
        $result = $statement->get_result();
        
        if(!$result){
            echo "Assume the SQL statement has an error";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }else{
            $product_array = array();
            
            while($product = $result->fetch_assoc()){
                array_push($product_array, $product);
            }
            
            return $product_array;
        }
    }
}