<?php

class Product{
    
    private $id;
    private $productname;
    private $description;
    private $price;
    
    public function __construct($a, $b, $c, $d){
        $this->id = $a;
        $this->productname = $b;
        $this->description = $c;
        $this->price = $d;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $productname
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
}