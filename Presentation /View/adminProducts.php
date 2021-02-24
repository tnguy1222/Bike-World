<?php

require_once 'AutoLoader.php';
require_once 'header.php';

$bs = new ProductBusinessService();
$products = $bs->showAll();

echo "<h1>All Products<h1>";

require_once '_displayAllProducts.php';