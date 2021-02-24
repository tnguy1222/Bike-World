<?php

class CreditCardService{
    
    private $cardname;
    private $cardnumber;
    private $cvv;
    private $expmonth;
    private $expyear;
    
    function __construct($cardname, $cardnumber, $cvv, $expmonth, $expyear){
        $this->cardname = $cardname;
        $this->cardnumber = $cardnumber;
        $this->cvv = $cvv;
        $this->expmonth = $expmonth;
        $this->expyear = $expyear;
    }
    
    public function authenticate(){
        if($this->cardname == "Jim Nguyen" && $this->cardnumber == "1234 5678 8765 4321" && $this->cvv == "123" && $this->expmonth == "September" && $this->expyear == "1"){
            return true;
        
        }else{
            return false;
        }
    }
}