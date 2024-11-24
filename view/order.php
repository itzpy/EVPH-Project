<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/order.css">
    <style>

    </style>
</head>

<body>
    <?php include "../view/menu.php"; ?>
    <form action="../functions/place_order.php" method="post" class="animate__animated animate__fadeIn">
        <header>
            <h1>Order Form</h1>
            <p>Place your orders and check out the amazing food on our menu today</p>
        </header>

        <label for="user_id">Student ID:</label>
        <input type="text" id="user_id" name="user_id" required />

        <label for="menu_item_id">Menu Item ID:</label>
        <input type="text" id="menu_item_id" name="menu_item_id" required />

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required />

        <button type="submit" class="animate__animated animate__pulse animate__infinite">Place Order</button>
    </form>

    <script>
        document.querySelector('button').addEventListener('click', function () {
            this.classList.add('clicked');
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>