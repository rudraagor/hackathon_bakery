<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = " ";
    // $db_name = "bakery_db";
    $conn = new mysqli('localhost', 'root', '', 'bakery_db');

    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    echo"";
?>