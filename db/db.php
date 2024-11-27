<?php
// $servername = "localhost";
// $username = "edem.anagbah";
// $password = "Ed21emk@2023";
// $dbname = "webtech_fall2024_edem_anagbah";

$servername = "localhost";
$username = "root";         
$password = "";            
$dbname = "restaurant_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>