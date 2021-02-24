<?php

class Card{
    
    private $id;
    private $name;
    private $card_number;
    private $cvv;
    private $month;
    private $year;
    private $balance;
    
    
    function __construct($a, $b, $c, $d, $e, $f, $g){
        $this->id = $a;
        $this->name = $b;
        $this->card_number = $c;
        $this->cvv = $d;
        $this->month = $e;
        $this->year = $f;
        $this->balance = $g;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCard_number()
    {
        return $this->card_number;
    }

    /**
     * @return mixed
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $card_number
     */
    public function setCard_number($card_number)
    {
        $this->card_number = $card_number;
    }

    /**
     * @param mixed $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    
    
    
}