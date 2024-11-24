<?php
include '../db/db.php';

function getMenuItems()
{
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
$menuResult = getMenuItems();
foreach ($menuResult as $item) {
    echo "<div class='menu-item'>";
    echo "<h3>" . htmlspecialchars($item['name']) . "</h3>";
    echo "<p>" . htmlspecialchars($item['description']) . "</p>";
    echo "<p>Price: $" . htmlspecialchars($item['price']) . "</p>";
    echo "<p>Category: " . htmlspecialchars($item['category']) . "</p>";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>
    <?php include "../utils/navigation.php"; ?>
    <div class="dashboard-container">
        <div class="main-content">
            <h1>Welcome!</h1>

            <!-- Menu Section -->
            <section class="menu-section">
                <div class="card">
                    <h2>Menu</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $menuResult->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['item_id'] ?></td>
                                    <td><?= htmlspecialchars($row['name']) ?></td>
                                    <td><?= htmlspecialchars($row['description']) ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <td><?= htmlspecialchars($row['category']) ?></td>
                                    <td>
                                        <button onclick="confirmPlaceOrder(<?= $row['item_id'] ?>)">Order</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <script src="../assets/javascript/navigation.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>