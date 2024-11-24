<?php
session_start();
include "../db/db.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../view/akornorlogin.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$item_id = $_POST['item_id'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];

// Insert feedback into the database
$stmt = $conn->prepare("INSERT INTO feedback (user_id, item_id, rating, comments) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iiis", $user_id, $item_id, $rating, $comments);
if ($stmt->execute()) {
    header("Location: customer_dashboard.php");
} else {
    echo "Failed to submit feedback.";
}
?>
