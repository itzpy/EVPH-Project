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

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <label for="ReviewType">Review Type:</label>
        <select id="ReviewType" name="ReviewType" required class="form-input">
            <option value="food">Food</option>
            <option value="service">Service</option>
            <option value="ambiance">Ambiance</option>
            <option value="overall">Overall Experience</option>
        </select>

        <input type="hidden" id="feedback_id" name="feedback_id" 
            value="<?php echo htmlspecialchars($_GET['feedback_id'], ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit">Update Feedback</button>
    </form>

</body>


</html>