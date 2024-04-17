<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    echo $username;

    // database connection

    $conn = new mysqli('localhost', 'root', '', 'bakery_db');

    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into accountmn(username, email, pass) values(?, ?, ?)");

        $stmt->bind_param("sss", $username, $email, $pass);
        $stmt->execute();
        header("Location: login.php");
        $stmt->close();
        $conn->close();
    }
?>