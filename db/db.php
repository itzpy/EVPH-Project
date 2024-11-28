<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "restaurant_db";

$servername = "localhost";
$username = "papa.badu";
$password = "password";
$dbname = "webtech_fall2024_papa_badu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>