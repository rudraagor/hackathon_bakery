<?php
// Database connection parameters
$servername = "localhost"; // Change if necessary
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "checkout_db"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$total_amount = $_POST['total_amount'];

// Prepare SQL statement to insert data into the orders table
$sql = "INSERT INTO orders (name, email, address, phone, total_amount) VALUES ('$name', '$email', '$address', '$phone', '$total_amount')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
