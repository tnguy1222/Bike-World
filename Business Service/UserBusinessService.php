<?php

require_once 'AutoLoader.php';

class UserBusinessService{
    function findByFirstName($n){
    
    $persons = Array();
    $dbService = new UserDataService();
    $persons = $dbService->findByFirstName($n);
    
    return $persons;
    }
    
    function findByID($id){
        
        $persons = Array();
        $dbService = new UserDataService();
        $persons = $dbService->findByID($id);
        
        return $persons;

    }
    
    function makeNew($person){
        $dbService = new UserDataService();
        return $dbService->makeNew($person);
    }
    
    function update($id,$person){
        $dbService = new UserDataService();
        return $dbService->update($id, $person);
    }
    
    function deleteItem($id){
        $dbService = new UserDataService();
        return $dbService->deleteItem($id);
    }
    function showAll(){
        
        $persons = Array();
        $dbService = new UserDataService();
        $persons = $dbService->showAll();
        
        return $persons;
    }
}