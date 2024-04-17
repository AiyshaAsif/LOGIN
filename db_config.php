<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_registration"; // Change to the name of your database

// Attempt to establish a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    // If connection failed, output an error message and terminate script execution
    die("Connection failed: " . $conn->connect_error);
}
?>

