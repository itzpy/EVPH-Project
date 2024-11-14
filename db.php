<?php
$servername = "localhost";  // Change to your server settings if different
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "restaurant_db";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
