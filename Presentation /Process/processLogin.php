<?php
require_once 'header.php';
require_once 'AutoLoader.php';
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

if($username == NULL){
    echo "<p>User name is a required field and cannot be blank. <br />
            Please try again.</p>";
    exit;
}

if($password == NULL){
    echo "<p>Password is a required field and cannot be blank. <br />
            Please try again.</p>";
    exit;
}

include 'functions.php';
dbconnect();


if($connection){
    
    $attemptedLoginName = addslashes($_POST['username']);
    $attemptedPassword = addslashes($_POST['password']);
    
    
    //echo "<br> login name: " . $attemptedLoginName . "<br> password: " . $attemptedPassword. "<br>";
    
    
    $sql_statement = "SELECT * FROM users WHERE username = '$attemptedLoginName' AND password = '$attemptedPassword' LIMIT 1";
    $result = mysqli_query($connection, $sql_statement);
    if($result){
        if(mysqli_num_rows($result)== 1){
            
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['userid'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            
            $_SESSION['principal'] = true;
            include 'processLoginSuccess.php';
            
            //echo "Login Successful";
        }
        elseif(mysqli_num_rows($result)==0){
            $_SESSION['principal'] = false;
            include 'processLoginFailed.php';
            //echo "Login Failed. Please try again";
            exit;
            
        }
    }
    else {
        echo "error" . mysqli_error($connection);
        exit;
    }
    
}

else {
    echo "Error connecting " .mysqli_connect_errno();
    exit;
    
}