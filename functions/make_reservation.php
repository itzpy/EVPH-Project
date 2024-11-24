<?php
session_start();
include "../db/db.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../view/akornorlogin.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$reservation_time = $_POST['reservation_time'];
$number_of_people = $_POST['number_of_people'];

// Validate reservation time (ensure it's in the future)
if (strtotime($reservation_time) < time()) {
    echo "Reservation time must be in the future.";
    exit();
}

// Insert the reservation into the database
$stmt = $conn->prepare("INSERT INTO reservations (user_id, reservation_time, number_of_people, status) VALUES (?, ?, ?, 'pending')");
$stmt->bind_param("isi", $user_id, $reservation_time, $number_of_people);

if ($stmt->execute()) {
    // Redirect to the dashboard with success message
    header("Location: customer_dashboard.php?reservation=success");
} else {
    echo "Failed to make a reservation. Please try again.";
}
?>