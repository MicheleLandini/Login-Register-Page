<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Your_password";
$database = "vindicta";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn === false) {
    die("Connection failed: " . $conn->connect_error);
}
?>
