<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $menuItemId = $_POST['menu_item_id'];
    $quantity = $_POST['quantity'];
    
    function placeOrder($userId, $menuItemId, $quantity) {
        global $conn;
        $sql = "INSERT INTO orders (user_id, menu_item_id, quantity, status) VALUES (?, ?, ?, 'Pending')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $userId, $menuItemId, $quantity);
        
        if ($stmt->execute()) {
            echo "Order placed successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    placeOrder($userId, $menuItemId, $quantity);
}
?>
