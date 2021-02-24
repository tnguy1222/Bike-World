<?php

class Cart {
    private $userid;
    private $items = array();
    private $subtotals =array();
    private $total_price;
    
    function __construct($userid){
        $this->userid = $userid;
        $this->items = array();
        $this->subtotals = array();
        $this->total_price = 0;
    }
    
    function addItem($prod_id){
        
        if(array_key_exists($prod_id, $this->items)){
            //if item already in the cart, add 1 in quantity
            $this->items[$prod_id] +=1 ;
        }else{
            //if item is not in cart, set quantity to 1
            $this->items = $this->items + array($prod_id => 1);
            
        }
    }
    
    function removeItem($prod_id){
        
        if(array_key_exists($prod_id, $this->items)){
            //if item already in the cart, minus 1 in quantity
            unset($this->items[$prod_id]);
        }else{
            //if item is not in cart, set quantity to 1
            $this->items = $this->items + array($prod_id => 0);
            
        }
    }
    
    function updateQuantity($prod_id, $new_qty){
        if(array_key_exists($prod_id, $this->items)){
            //if item already in the cart, add 1 in quantity
            $this->items[$prod_id] = $new_qty ;
        }else{
            //if item is not in cart, set quantity to 1
            $this->items = $this->items + array($prod_id => $new_qty);
            
        }
        
        if($this->items[$prod_id] == 0){
            unset($this->items[$prod_id]);
        }
    }
    
    function calcTotal(){
        //calculate the subtotal for product in cart
        //calculate the total for the entire cart.
       
        $productBS = new ProductBusinessService();
        //create an array to hold subtotal value
        $subtotals_array = array();
        $this->total_price = 0;
        foreach ($this->items as $item=> $qty){
            $product = $productBS->findByID($item);
            $product_subtotal = $product->getPrice() * $qty;
            $subtotals_array = $subtotals_array + array($item => $product_subtotal);
            $this->total_price = $this->total_price + $product_subtotal;
        }
        
        $this->subtotals= $subtotals_array;
    }
    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @return multitype:
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return multitype:
     */
    public function getSubtotals()
    {
        return $this->subtotals;
    }

    /**
     * @return number
     */
    public function getTotal_price()
    {
        return $this->total_price;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @param multitype: $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @param multitype: $subtotals
     */
    public function setSubtotals($subtotals)
    {
        $this->subtotals = $subtotals;
    }

    /**
     * @param number $total_price
     */
    public function setTotal_price($total_price)
    {
        $this->total_price = $total_price;
    }

    
    
    
}