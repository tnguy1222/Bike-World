<?php

class Order{
    
    private $id;
    private $date;
    private $users_id;
    private $total ;
    
    function __construct($a, $b, $c, $d){
        $this->id = $a;
        $this->date = $b;
        $this->users_id = $c;
        $this->total = $d;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getUsers_id()
    {
        return $this->users_id;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $users_id
     */
    public function setUsers_id($users_id)
    {
        $this->users_id = $users_id;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    
    
    
}