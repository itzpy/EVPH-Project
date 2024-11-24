<?php
session_start();
include "../db/db.php";

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/akornorlogin.php");
    exit();
}

// Identify the user's role
$role = $_SESSION['role'];


if ($role === 'admin') {
    // Fetch all users

    $usersQuery = "SELECT * FROM users";
    $usersResult = $conn->query($usersQuery);
    // Fetch admin data
    $menuQuery = "SELECT * FROM menu_items";
    $menuResult = $conn->query($menuQuery);

    $ordersQuery = "SELECT * FROM orders";
    $ordersResult = $conn->query($ordersQuery);

    $reservationsQuery = "SELECT * FROM reservations";
    $reservationsResult = $conn->query($reservationsQuery);

    $feedbackQuery = "SELECT * FROM feedback";
    $feedbackResult = $conn->query($feedbackQuery);

    // Include admin dashboard template
    include "../view/admin_dashboard.php";

} elseif ($role === 'customer') {
    $user_id = $_SESSION['user_id'];

    // Fetch customer data
    $menuQuery = "SELECT * FROM menu_items WHERE availability = 1";
    $menuResult = $conn->query($menuQuery);

    $ordersQuery = "SELECT * FROM orders WHERE user_id = ?";
    $stmt = $conn->prepare($ordersQuery);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $ordersResult = $stmt->get_result();

    $reservationsQuery = "SELECT * FROM reservations WHERE user_id = ?";
    $stmt = $conn->prepare($reservationsQuery);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $reservationsResult = $stmt->get_result();

    $feedbackQuery = "SELECT * FROM feedback WHERE user_id = ?";
    $stmt = $conn->prepare($feedbackQuery);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $feedbackResult = $stmt->get_result();

    // Include customer dashboard template
    include "../view/customer_dashboard.php";

} else {
    echo "Invalid role.";
    exit();
}
?>