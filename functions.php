<?php
function dbconnect(){

$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "CST236-WebProject";
global  $connection;
$connection=mysqli_connect($servername, $username, $password, $database_name);
return $connection;

if (mysqli_connect_err) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

}

?>