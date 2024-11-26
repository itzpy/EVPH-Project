<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/modal.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <?php include("../utils/navigation.php"); ?>
    <div class="dashboard-container">
        <div class="main-content">
            <h1>Welcome, Admin!</h1>

            <!-- User Section -->
            <section class="user-section">
                <div class="card">
                    <h2>Users</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $userResult->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['user_id'] ?></td>
                                    <td><?= htmlspecialchars($row['fname'] . ' ' . $row['lname']) ?></td>
                                    <td><?= htmlspecialchars($row['email']) ?></td>
                                    <td><?= htmlspecialchars($row['role']) ?></td>
                                    <td>
                                        <button onclick="confirmDeleteUser(<?= $row['user_id'] ?>)">Delete</button>
                                        <button onclick="confirmUpdateUser(<?= $row['user_id'] ?>)">Update</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Menu Section -->
            <section class="menu-section">
                <div class="card">
                    <h2>Menu Items</h2>
                    <button onclick="showAddItemModal()">Add Item</button>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Availability</th>
                                <th>Actions</th>
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
                                    <td><?= $row['availability'] ? 'Available' : 'Unavailable' ?></td>
                                    <td>
                                        <button onclick="editMenuItem(<?= $row['item_id'] ?>)">Edit</button>
                                        <button onclick="confirmDelete(<?= $row['item_id'] ?>)">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- Modal for Adding a New Menu Item -->
            <div id="addItemModal" class="modal" style="display: none;">
                <div class="modal-content">
                    <span class="close" onclick="closeAddItemModal()">&times;</span>
                    <h3>Add New Menu Item</h3>
                    <form action="../utils/add_menu.php" method="POST" class="add-menu-form">
                        <label for="name">Item Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="3"></textarea>

                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" step="0.01" required>

                        <label for="category">Category:</label>
                        <input type="text" id="category" name="category">

                        <label for="availability">Availability:</label>
                        <select id="availability" name="availability">
                            <option value="1">Available</option>
                            <option value="0">Unavailable</option>
                        </select>

                        <button type="submit">Add Item</button>
                    </form>
                </div>
            </div>

            <style>
                
            </style>

            <!-- Orders Section -->
            <section class="orders-section">
                <div class="card">
                    <h2>Orders</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Payment Method</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $ordersResult->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['order_id'] ?></td>
                                    <td><?= $row['user_id'] ?></td>
                                    <td><?= $row['total_price'] ?></td>
                                    <td><?= htmlspecialchars($row['status']) ?></td>
                                    <td><?= htmlspecialchars($row['payment_method']) ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <button onclick="confirmOrderUpdate(<?= $row['order_id'] ?>)">Update Status</button>
                                        <button onclick="confirmDeleteOrder(<?= $row['order_id'] ?>)">Cancel</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Reservations Section -->
            <section class="reservations-section">
                <div class="card">
                    <h2>Reservations</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Reservation ID</th>
                                <th>User ID</th>
                                <th>Time</th>
                                <th>People</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $reservationsResult->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['reservation_id'] ?></td>
                                    <td><?= $row['user_id'] ?></td>
                                    <td><?= $row['reservation_time'] ?></td>
                                    <td><?= $row['number_of_people'] ?></td>
                                    <td><?= htmlspecialchars($row['status']) ?></td>
                                    <td>
                                        <button
                                            onclick="confirmReservationUpdate(<?= $row['reservation_id'] ?>)">Update</button>
                                        <button
                                            onclick="confirmDeleteReservation(<?= $row['reservation_id'] ?>)">Cancel</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Feedback Section -->
            <section class="feedback-section">
                <div class="card">
                    <h2>Feedback</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Feedback ID</th>
                                <th>User ID</th>
                                <th>Category</th>
                                <th>Rating</th>
                                <th>Comments</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $feedbackResult->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['feedback_id'] ?></td>
                                    <td><?= $row['user_id'] ?></td>
                                    <td><?= $row['category'] ?></td>
                                    <td><?= $row['rating'] ?></td>
                                    <td><?= htmlspecialchars($row['comments']) ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <button onclick="confirmFeedbackUpdate(<?= $row['feedback_id'] ?>)">Update</button>
                                        <button onclick="confirmDeleteFeedback(<?= $row['feedback_id'] ?>)">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../../assets/javascript/navigation.js"></script>
    <script src="../../assets/javascript/confirmUpdateDelete.js"></script>

    <script src="../assets/javascript/modal.js"></script>


</body>

</html>