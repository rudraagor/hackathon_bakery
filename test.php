<?php

    $conn = new mysqli('localhost', 'root', '', 'bakery_db');

    if($conn->connect_error){
echo "didnt connect :(";
    }
    else{
        echo "Eureka! Connected to db";
    }
?>