<?php
    $_SERVER = "localhost";
    $username = "root";
    $password = "";
    $database = "parking system";
 
    $conn = new mysqli($_SERVER, $username, $password, $database);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
           }
         
?>
