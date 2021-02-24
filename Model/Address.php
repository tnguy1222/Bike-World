<?php

class Address {
    
    private $id;
    private $addresstype;
    private $isdefault;
    private $street;
    private $city;
    private $state;
    private $postalcode;
    private $users_id;
    
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
    public function getAddresstype()
    {
        return $this->addresstype;
    }

    /**
     * @return mixed
     */
    public function getIsdefault()
    {
        return $this->isdefault;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * @return mixed
     */
    public function getUsers_id()
    {
        return $this->users_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $addresstype
     */
    public function setAddresstype($addresstype)
    {
        $this->addresstype = $addresstype;
    }

    /**
     * @param mixed $isdefault
     */
    public function setIsdefault($isdefault)
    {
        $this->isdefault = $isdefault;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $postalcode
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }

    /**
     * @param mixed $users_id
     */
    public function setUsers_id($users_id)
    {
        $this->users_id = $users_id;
    }

    function __construct($a, $b, $c, $d, $e, $f, $g , $h){
        $this->id = $a;
        $this->addresstype = $b;
        $this->isdefault = $c;
        $this->street = $d;
        $this->city = $e;
        $this->state = $f;
        $this->postalcode = $g;
        $this->users_id = $h;
    }
    
    
    
}