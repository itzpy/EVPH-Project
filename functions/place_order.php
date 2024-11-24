<?php
session_start();
include "../db/db.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../view/akornorlogin.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$item_id = $_GET['item_id'];

// Insert the order into the database
$stmt = $conn->prepare("INSERT INTO orders (user_id, total_price, status) VALUES (?, 0, 'pending')");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$order_id = $stmt->insert_id;

// Fetch item details and add to order details
$stmt = $conn->prepare("SELECT price FROM menu_items WHERE item_id = ?");
$stmt->bind_param("i", $item_id);
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    $stmt = $conn->prepare("INSERT INTO order_details (order_id, item_id, quantity, price) VALUES (?, ?, 1, ?)");
    $stmt->bind_param("iid", $order_id, $item_id, $row['price']);
    $stmt->execute();

    // Update total price in orders table
    $stmt = $conn->prepare("UPDATE orders SET total_price = ? WHERE order_id = ?");
    $stmt->bind_param("di", $row['price'], $order_id);
    $stmt->execute();
    header("Location: customer_dashboard.php");
} else {
    echo "Item not found.";
}
?>