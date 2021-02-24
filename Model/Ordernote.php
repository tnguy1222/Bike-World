<?php

class Ordernote{
    
    private $id;
    private $note;
    private $date;
    private $users_id;
    private $orders_id;
    
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
    public function getNote()
    {
        return $this->note;
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
    public function getOrders_id()
    {
        return $this->orders_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
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
     * @param mixed $orders_id
     */
    public function setOrders_id($orders_id)
    {
        $this->orders_id = $orders_id;
    }

    function __construct($a, $b, $c, $d, $e){
        $this->id = $a;
        $this->note = $b;
        $this->date = $c;
        $this->users_id = $d;
        $this->orders_id = $c;
    }
    
    
}