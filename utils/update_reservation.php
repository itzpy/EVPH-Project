<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>Update User</title>
    <link rel="stylesheet" href="../assets/css/order.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <form action="../actions/update.php?action=reservation" method="post">
        <header>
            Update Reservation
        </header>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests" min="1" max="20" required>

        <label for="notes">Special Requests:</label>
        <textarea id="notes" name="notes" rows="4"></textarea>

        <input type="hidden" id="reservation_id" name="reservation_id" 
            value="<?php echo htmlspecialchars($_GET['reservation_id'], ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit">Update Reservation</button>
    </form>

</body>


</html>