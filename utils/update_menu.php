<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>Update Menu Item</title>
    <link rel="stylesheet" href="../assets/css/order.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <form action="../actions/update.php?action=menu" method="post">
        <header>
            Update Menu Item
        </header>

        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" min="0" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required class="form-input">
            <option value="appetizer">Appetizer</option>
            <option value="main">Main Course</option>
            <option value="dessert">Dessert</option>
            <option value="beverage">Beverage</option>
        </select>

        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required class="form-input">
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select>

        <input type="hidden" id="item_id" name="item_id" 
            value="<?php echo htmlspecialchars($_GET['item_id'], ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit">Update Menu Item</button>
    </form>

</body>


</html>