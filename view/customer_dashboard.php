<style>

</style>

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
      <h1>Welcome! <ion-icon name="happy-outline"></ion-icon></h1>

      <!-- Menu Section -->
      <section class="menu-section">
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
      <section class="my-orders-section">
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
      <section class="place-reservation-section">
        <div class="card">
          <h2>Make a Reservation <ion-icon name="restaurant-outline"
              class="animate__animated animate__bounce"></ion-icon></h2>
          <p style="margin-bottom: 1.5em">Plan ahead and secure a table for your next visit. We can't wait to welcome
            you back!</p>
          <a href="../view/reservation.php" class="button-link" style="display: block; width: fit-content; margin: 0 auto">Book
            Now</a>
        </div>
      </section>

      <!-- Provide Feedback Section -->
      <section class="feedback-section">
        <div class="card">
          <h2>Help Us Improve <ion-icon name="chatbubble-ellipses-outline"
              class="animate__animated animate__bounce"></ion-icon></h2>
          <p style="margin-bottom: 1.5em">We value your opinion and would love to hear from you. Your feedback will help
            us improve our customer experience.</p>
          <a href="review.php" class="button-link" style="display: block; width: fit-content; margin: 0 auto">Take Our
            Survey</a>
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
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>