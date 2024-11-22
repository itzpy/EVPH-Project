/*************  ✨ Codeium Command 🌟  *************/
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akornor Demo</title>
    <link rel="stylesheet" href="akornor.css" />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-image: url("https://source.unsplash.com/1600x900/?ashesi,ghana,food");
        background-size: cover;
        background-position: center;
      }
      header {
        text-align: center;
        color: white;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 1em;
      }
      nav {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 1em;
      }
      nav a {
        color: white;
        text-decoration: none;
        margin: 0 1em;
      }
      nav a:hover {
        background-color: rgba(255, 255, 255, 0.2);
      }
      .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 2em;
      }
      .menu-section {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 1em;
        margin: 1em;
        flex-basis: 30%;
      }
      .menu-item {
        background-color: #eee;
        padding: 0.5em;
        margin: 0.5em;
        border-radius: 0.5em;
        box-shadow: 0 0.2em 0.5em rgba(0, 0, 0, 0.2);
      }
      .menu-item > span:first-child {
        font-weight: bold;
      }
      .menu-item > span:last-child {
        float: right;
      }
      .order-section {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 1em;
        margin: 1em;
        flex-basis: 30%;
      }
      .order-section > p {
        text-align: center;
      }
      .order-section > a {
        display: block;
        background-color: #4CAF50;
        color: white;
        padding: 0.5em;
        border-radius: 0.5em;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Welcome to Akornor Restaurant</h1>
      <p>Convenient Dining Experience at Ashesi University</p>
    </header>

    <nav>
      <a href="akornorhome.html">Home</a>
      <a href="#">Menu</a>
      <a href="order.html">Order</a>
      <a href="#">Reservations</a>

      <a href="Review.html">Leave a Review</a>
    </nav>

    <div class="container">
      <!-- Menu Section -->
      <section class="menu-section">
        <h2>Today's Menu</h2>
        <?php
          include_once '../functions/db.php';
          $conn = connectDB();
          $sql = "SELECT * FROM menu";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<div class='menu-item'>";
              echo "<span>" . $row['name'] . "</span>";
              echo "<span>" . $row['price'] . "</span>";
              echo "</div>";
            }
          }
        ?>
      </section>

      <!-- Order Section -->
      <section class="order-section">
        <h2>Place Your Order</h2>
        <p>Please click on the order button below to place your order</p>
        <a href="order.html" class="btn">Place Order</a>
      </section>
    </div>
  </body>
</html>


/******  317221cb-0f42-4938-8143-542f58bfb062  *******/