<?php
include 'db.php';

function getMenuItems() {
    global $conn;
    $sql = "SELECT * FROM menu_items";
    $result = $conn->query($sql);
    $menuItems = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $menuItems[] = $row;
        }
    }
    return $menuItems;
}

// Display items on the Menu Page
$menuItems = getMenuItems();
foreach ($menuItems as $item) {
    echo "<div class='menu-item'>";
    echo "<h3>" . htmlspecialchars($item['name']) . "</h3>";
    echo "<p>" . htmlspecialchars($item['description']) . "</p>";
    echo "<p>Price: $" . htmlspecialchars($item['price']) . "</p>";
    echo "</div>";
}
?>
