<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the message from the form
    $message = $_POST["message"];

    // Open the file in append mode
    $file = fopen("contact.txt", "a");

    // Write the message to the file
    fwrite($file, $message . PHP_EOL);

    // Close the file
    fclose($file);

    // Redirect back to the contact page
    header("Location: contactus.html");
    exit;
}
?>