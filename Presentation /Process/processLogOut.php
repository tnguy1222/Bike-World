<?php
require_once 'header.php';
require_once 'AutoLoader.php';
//unset the session variables 
unset($_SESSION['username']); 
unset($_SESSION['cart']);
unset($_SESSION['principal']);
//REDIRECT THEM TO THE HOME PAGE

require_once 'index.php';
?>