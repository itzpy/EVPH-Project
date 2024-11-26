<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">


  <title>Customer Dashboard</title>
  <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>
  <?php include "../utils/navigation.php"; ?>
  <div class="dashboard-container">
    <div class="main-content">
      <h1>Welcome! <ion-icon name="happy-outline"></ion-icon></h1>

      <!-- Menu Section -->
      <section class="menu-section" data-aos="fade-right" data-aos-duration="2000">
        <div class="card">
          <h2>Menu <ion-icon name="restaurant-outline" class="animate__animated animate__bounce"></ion-icon></h2>
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
      <section class="my-orders-section" data-aos="fade-right" data-aos-duration="2000">
        <div class="card">
          <h2>My Orders <ion-icon name="cart-outline" class="animate__animated animate__bounce"></ion-icon></h2>
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
                    <button onclick="confirmPlaceOrder(<?= $row['order_id'] ?>)">Order Again</button>
                    <button onclick="confirmCancelOrder(<?= $row['order_id'] ?>)">Cancel</button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>

      <!-- My Reservations Section -->
      <section class="my-reservations-section" data-aos="fade-right" data-aos-duration="2000">
        <div class="card">
          <h2>My Reservations <ion-icon name="calendar-outline" class="animate__animated animate__bounce"></ion-icon>
          </h2>
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
      <section class="place-reservation-section" data-aos="fade-right" data-aos-duration="2000">
        <div class="card">
          <h2>Make a Reservation <ion-icon name="restaurant-outline"
              class="animate__animated animate__bounce"></ion-icon></h2>
          <p style="margin-bottom: 1.5em">Plan ahead and secure a table for your next visit. We can't wait to welcome
            you back!</p>
          <a href="../view/reservation.php" class="button-link"
            style="display: block; width: fit-content; margin: 0 auto">Book
            Now</a>
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
      window.location.href = "../view/order.php?item_id=" + item_id;

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

    function confirmDeleteFeedback(id) {
      if (confirm("Are you sure you want to delete this feedback?")) {
        window.location.href = "../actions/delete.php?action=feedback&feedback_id=" + id;
      }
    }


  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>