<?php
session_start();
include "../db/db.php";

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../view/akornorlogin.php");
    exit();
}

$order_id = $_GET['id'];
$new_status = $_POST['status'];

// Update order status
$stmt = $conn->prepare("UPDATE orders SET status = ? WHERE order_id = ?");
$stmt->bind_param("si", $new_status, $order_id);
if ($stmt->execute()) {
    header("Location: ../view/dashboard.php");
} else {
    echo "Failed to update order status.";
}
?>