<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard</title>
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

      <!-- My Orders Section -->
      <section class="my-orders-section">
        <div class="card">
          <h2>My Orders</h2>
          <table border="1">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $ordersResult->fetch_assoc()) { ?>
                <tr>
                  <td><?= $row['order_id'] ?></td>
                  <td><?= $row['total_price'] ?></td>
                  <td><?= htmlspecialchars($row['status']) ?></td>
                  <td><?= $row['created_at'] ?></td>
                  <td>
                    <button onclick="confirmCancelOrder(<?= $row['order_id'] ?>)">Cancel</button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>

      <!-- My Reservations Section -->
      <section class="my-reservations-section">
        <div class="card">
          <h2>My Reservations</h2>
          <table border="1">
            <thead>
              <tr>
                <th>Reservation ID</th>
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
                  <td><?= $row['reservation_time'] ?></td>
                  <td><?= $row['number_of_people'] ?></td>
                  <td><?= htmlspecialchars($row['status']) ?></td>
                  <td>
                    <button onclick="confirmCancelReservation(<?= $row['reservation_id'] ?>)">Cancel</button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Place Reservation Section -->
      <section class="place-reservation-section">
        <div class="card">
          <form id="reservationForm" action="../functions/make_reservation.php" method="POST">
            <h2>Make a Reservation</h2>
            <div>
              <label for="reservation_time">Reservation Time:</label>
              <input type="datetime-local" id="reservation_time" name="reservation_time" required>
            </div>
            <div>
              <label for="number_of_people">Number of People:</label>
              <input type="number" id="number_of_people" name="number_of_people" min="1" required>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </section>

      <!-- Provide Feedback Section -->
      <section class="feedback-section">
        <div class="card ">
          <h2>How was your experience?</h2>
          <form id="feedbackForm" action="../functions/submit_feedback.php" method="POST">
            <label for="item_id">Item ID:</label>
            <input type="number" id="item_id" name="item_id" required>
            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments"></textarea>
            <button type="submit">Submit</button>
          </form>
        </div>
      </section>
    </div>
  </div>

  <script src="../assets/javascript/navigation.js"></script>
  <script>
    function confirmPlaceOrder(item_id) {
      if (confirm("Are you sure you want to place this order?")) {
        window.location.href = "../functions/place_order.php?item_id=" + item_id;
      };
    }
    function confirmCancelOrder(order_id) {
      if (confirm("Are you sure you want to cancel this order?")) {
        window.location.href = "../functions/cancel_order.php?id=" + order_id;
      };
    }
    function confirmCancelReservation(reservation_id) {
      if (confirm("Are you sure you want to cancel this reservation?")) {
        window.location.href = "../functions/cancel_reservation.php?id=" + reservation_id;
      };
    }
    function confirmPlaceReservation(reservation_id) {
      if (confirm("Are you sure you want to place this reservation?")) {
        window.location.href = "../functions/make_reservation.php?id=" + reservation_id;
      };
    }
  </script>
  <script>
    document.getElementById("feedbackForm").addEventListener("submit", function (event) {
      event.preventDefault();

      this.submit();
    });
  </script>
  <script>
    document.getElementById("reservationForm").addEventListener("submit", function (event) {
      event.preventDefault();
      this.submit();
    })
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>