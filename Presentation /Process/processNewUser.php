<?php 

require_once 'AutoLoader.php';


if(isset($_POST)){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
}else{
    echo "Nothing is submitted. Please try again";
}
//send a new user object to business service;

$ubs = new UserBusinessService();

$person = new User(0, $firstname, $lastname, $username, $password, $role);

if($ubs->makeNew($person)){
    echo "Item inserted .<br>";
}else{
    echo "Nothing inserted .<br>";
}
echo "<a href='adminUsers.php'>Return to main page</a>";

?>
