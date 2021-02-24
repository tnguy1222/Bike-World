<?php

require_once 'AutoLoader.php';
require_once 'header.php';

$bs = new UserBusinessService();
$persons = $bs->showAll();

echo "<h1>All Users<h1>";

require_once '_displayAllUsers.php';