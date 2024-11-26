<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>Update Feedback</title>
    <link rel="stylesheet" href="../assets/css/order.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <form action="../actions/update.php?action=feedback" method="post">
        <header>
            Update Feedback
        </header>

        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required class="form-input">
            <option value="1">1 Star</option>
            <option value="2">2 Stars</option>
            <option value="3">3 Stars</option>
            <option value="4">4 Stars</option>
            <option value="5">5 Stars</option>
        </select>

        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4" required></textarea>

        <input type="hidden" id="feedback_id" name="feedback_id" 
            value="<?php echo htmlspecialchars($_GET['feedback_id'], ENT_QUOTES, 'UTF-8'); ?>">
            
        <input type="hidden" id="user_id" name="user_id" 
            value="<?php echo htmlspecialchars($_SESSION['user_id'], ENT_QUOTES, 'UTF-8'); ?>">
            
        <input type="hidden" id="item_id" name="item_id" 
            value="<?php echo htmlspecialchars($_GET['item_id'], ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit">Update Feedback</button>
    </form>

</body>


</html>