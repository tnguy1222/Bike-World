<?php
include_once 'header.php';
require_once 'AutoLoader.php';
require_once 'securePage.php';
echo " Logged in successful! </br>"; 
echo "Welcome back " . $_SESSION['username'];

header('index.php');

?>