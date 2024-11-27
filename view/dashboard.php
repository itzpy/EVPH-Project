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
    // Fetch all user
    $userQuery = "SELECT * FROM user";
    $userResult = $conn->query($userQuery);
    if (!$userResult) {
        die("Error fetching user: " . $conn->error);
    }

    // Fetch menu items
    $menuQuery = "SELECT * FROM menu_items";
    $menuResult = $conn->query($menuQuery);
    if (!$menuResult) {
        die("Error fetching menu items: " . $conn->error);
    }

    // Fetch orders
    $ordersQuery = "SELECT * FROM orders";
    $ordersResult = $conn->query($ordersQuery);
    if (!$ordersResult) {
        die("Error fetching orders: " . $conn->error);
    }

    // Fetch reservations
    $reservationsQuery = "SELECT * FROM reservations";
    $reservationsResult = $conn->query($reservationsQuery);
    if (!$reservationsResult) {
        die("Error fetching reservations: " . $conn->error);
    }

    // Fetch feedback
    $feedbackQuery = "SELECT * FROM feedback";
    $feedbackResult = $conn->query($feedbackQuery);
    if (!$feedbackResult) {
        die("Error fetching feedback: " . $conn->error);
    }


    // Fetch analytics data from the database
    $analytics = [
        'total_users' => $conn->query("SELECT COUNT(*) AS count FROM user")->fetch_assoc()['count'],
        'total_menu_items' => $conn->query("SELECT COUNT(*) AS count FROM menu_items")->fetch_assoc()['count'],
        'total_orders' => $conn->query('SELECT COUNT(*) AS count FROM orders')->fetch_assoc()['count'],
        'total_reviews' => $conn->query("SELECT COUNT(*) AS count FROM feedback")->fetch_assoc()['count'],
        'total_reservations' => $conn->query("SELECT COUNT(*) AS count FROM reservations")->fetch_assoc()['count'],
    ];


    // Include admin dashboard template
    include "./admin/admin_dashboard.php";

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

    $analytics = [
        'available_menu_items'=> $db-> query('SELECT COUNT(*) AS count FROM menu_items WHERE availability = 1')->fetch_assoc()['count'],
        'total_orders' => $db->query("SELECT COUNT(*) AS count FROM orders WHERE user_id = $user_id")->fetch_assoc()['count'],
        'total_reservations' => $db->query("SELECT COUNT(*) AS count FROM reservations WHERE user_id = $user_id")->fetch_assoc()['count'],
        'total_reviews' => $db->query("SELECT COUNT(*) AS count FROM feedback WHERE user_id = $user_id")->fetch_assoc()['count'],
    ];

    // Include customer dashboard template
    include "../view/customer_dashboard.php";

} else {
    echo "Invalid role.";
    exit();
}
?>