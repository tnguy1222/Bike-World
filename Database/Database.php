<?php
class Database{
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $database_name = "CST236-WebProject";
    function getConnection() {
        
        
        $connection=mysqli_connect($this->servername, $this->username, $this->password, $this->database_name);
        return $connection;
        
        if (mysqli_connect_err) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }
}

?>