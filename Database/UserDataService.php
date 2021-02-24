<?php

require_once 'Database.php';

class UserDataService{
    function findByFirstName($n){
    
    $db = new Database();
    $connection = $db->getConnection();
    $statement = $connection->prepare("SELECT id, firstname, lastname, username, password, role FROM users WHERE firstname LIKE ?");
    
    if(!$statement){
        echo "Something wrong in the binding process.sql error?";
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
        $person_array = array();
        
        while($person = $result->fetch_assoc()){
            array_push($person_array, $person);
        }
        
        return $person_array;
        }
    }

    function findByID($id){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
        
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
            $person_array = array();
            
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            $p = new User($person_array[0]['id'], $person_array[0]['firstname'], $person_array[0]['lastname'], $person_array[0]['username'], $person_array[0]['password'], $person_array[0]['role']);
            return $p;
        }
    
    }
    function makeNew($person){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("INSERT INTO users ( firstname, lastname, username, password, role) VALUES (?,?,?,?,?)");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        $fn = $person->getFirstname();
        $ln = $person->getLastname();
        $un = $person->getUsername();
        $pw = $person->getPassword();
        $ro = $person->getRole();
        
        $statement->bind_param("ssssi",  $fn, $ln, $un, $pw, $ro);
        $statement->execute();
        
        if($statement->affected_rows > 0){
            return true;
        }else{
            return false;
        }
    }

    function update($id,$person){
        $db = new Database();
        $connection = $db->getConnection();
        $statement = $connection->prepare("UPDATE users SET firstname = ?, lastname = ?, username = ?, password = ?, role = ? WHERE id = '$id'");
        
        if(!$statement){
            echo "Something wrong in the binding process.sql error?";
            exit;
        }
        
        $fn = $person->getFirstname();
        $ln = $person->getLastname();
        $un = $person->getUsername();
        $pw = $person->getPassword();
        $ro = $person->getRole();
        
        $statement->bind_param("ssssi",  $fn, $ln, $un, $pw, $ro);
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
        $statement = $connection->prepare("DELETE FROM users  WHERE id = ? LIMIT 1");
        
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
        $statement = $connection->prepare("SELECT * FROM users");
        
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
            $person_array = array();
            
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            
            return $person_array;
        }
    }
}
