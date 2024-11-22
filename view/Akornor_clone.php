<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akornor Demo</title>
    <link rel="stylesheet" href="../assets/css/akornor.css" />
    <style>
      body {
        background-color: #f5f5f5;
        font-family: "Lato", sans-serif;
      }

      .container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .menu-section {
        margin-top: 20px;
      }

      .menu-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
      }

      .order-section {
        margin-top: 30px;
      }

      .order-form {
        display: flex;
        flex-direction: column;
      }

      label {
        margin-bottom: 10px;
      }

      input[type="text"],
      input[type="number"],
      select {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      button[type="submit"]:hover {
        background-color: #45a049;
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
      <a href="#">Order</a>
      <a href="#">Reservations</a>
      <a href="Review.html">Leave a review</a>
    </nav>

    <div class="container">
      <!-- Menu Section -->
      <section class="menu-section">
        <h2>Today's Menu</h2>
        <?php
          $conn = new mysqli("localhost", "root", "", "akornor");
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM menu";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="menu-item">';
              echo '<span>' . $row["item_name"] . '</span>';
              echo '<span>GHS ' . $row["price"] . '</span>';
              echo '</div>';
            }
          } else {
            echo "0 results";
          }
          $conn->close();
        ?>
      </section>

      <!-- Order Section -->
      <section class="order-section">
        <h2>Place Your Order</h2>
        <form class="order-form">
          <label for="name">Full Name:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your name"
            required
          />

          <label for="item">Select Menu Item:</label>
          <select id="item" name="item" required>
            <?php
              $conn = new mysqli("localhost", "root", "", "akornor");
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM menu";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                }
              } else {
                echo "0 results";
              }
              $conn->close();
            ?>
          </select>

          <label for="quantity">Quantity:</label>
          <input
            type="number"
            id="quantity"
            name="quantity"
            min="1"
            max="10"
            value="1"
            required
          />

          <label for="contact">Contact Number:</label>
          <input
            type="text"
            id="contact"
            name="contact"
            placeholder="Enter your contact number"
            required
          />

          <button type="submit">Place Order</button>
        </form>
      </section>
    </div>

    <script>
      document
        .querySelector(".order-form")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          let name = document.getElementById("name").value;
          let item = document.getElementById("item").value;
          let quantity = document.getElementById("quantity").value;
          let contact = document.getElementById("contact").value;

          alert(
            `Thank you, ${name}! Your order for ${quantity} of ${item} has been placed. We will contact you at ${contact} for confirmation.`
          );
        });
    </script>
  </body>
</html>

