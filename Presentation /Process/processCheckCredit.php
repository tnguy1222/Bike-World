<?php

require_once 'AutoLoader.php';

$cardname = $_GET['cardname'];
$cardnumber = $_GET['cardnumber'];
$cvv = $_GET['cvv'];
$expmonth = $_GET['expmonth'];
$expyear = $_GET['expyear'];


$ccservice = new CreditCardService($cardname, $cardnumber, $cvv, $expmonth, $expyear);
if($ccservice->authenticate()){
    echo "Successful!";
}else{
    echo "Failed";
}