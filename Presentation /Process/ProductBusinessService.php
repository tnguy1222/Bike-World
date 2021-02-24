<?php

require_once 'AutoLoader.php';;


class ProductBusinessService{
    function findByProductName($n){
        
        $products = Array();
        $dbService = new ProductDataService();
        $products = $dbService->findByProductName($n);
        
        
        return $products;
    }
    
    function findByID($id){
        
        $products = Array();
        $dbService = new ProductDataService();
        $products = $dbService->findByID($id);
        
        return $products;
        
    }
    
    function makeNew($product){
        $dbService = new ProductDataService();
        return $dbService->makeNew($product);
    }
    
    function updateItem($id,$product){
        $dbService = new ProductDataService();
        return $dbService->updateItem($id, $product);
    }
    
    function deleteItem($id){
        $dbService = new ProductDataService();
        return $dbService->deleteItem($id);
    }
    
    function showAll(){
        
        $products = Array();
        $dbService = new ProductDataService();
        $products = $dbService->showAll();
        
        return $products;
    }
}