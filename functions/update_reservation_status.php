<?php
session_start();
include "../db/db.php";

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../view/akornorlogin.php");
    exit();
}

$reservation_id = $_GET['id'];
$new_status = $_POST['status'];

// Update reservation status
$stmt = $conn->prepare("UPDATE reservations SET status = ? WHERE reservation_id = ?");
$stmt->bind_param("si", $new_status, $reservation_id);
if ($stmt->execute()) {
    header("Location: admin_dashboard.php");
} else {
    echo "Failed to update reservation status.";
}
?>
