<?php
    include("connectionl.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "select * from accountmmn where usename=$username and pass=$pass";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("Location: main.html");
        }

        else{
            echo "check";
            echo "<script> 
                window.location.href = 'login.php';
                alert('Login failed. Invalid username or password')
            </script>";
            
        }
    }
?>