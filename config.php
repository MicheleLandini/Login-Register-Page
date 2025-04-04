<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Xanax-gang-3001";
$database = "vindicta";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn === false) {
    die("Connection failed: " . $conn->connect_error);
}
?>
