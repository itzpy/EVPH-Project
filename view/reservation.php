<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #722F37, #482126), url('../assets/images/background.jpg') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
      max-width: 500px;
      width: 100%;
      text-align: center;
    }

    header {
      margin-bottom: 25px;
    }

    h1 {
      font-size: 2.5em;
      color: #722F37;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 20px;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin: 15px 0 5px;
      font-weight: bold;
      text-align: left;
    }

    input,
    select {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 6px;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
    }

    input:focus,
    select:focus {
      border-color: #722F37;
      outline: none;
    }

    button {
      padding: 12px 25px;
      background-color: #722F37;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
    }

    button:hover {
      background-color: #482126;
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <h1>Restaurant Reservation</h1>
      <p>Reserve a table for your next meal</p>
    </header>
    <form action="../actions/reservation.php" method="post">
      <label for="user_id"><ion-icon name="person-outline"></ion-icon> User ID:</label>
      <input type="text" id="user_id" name="user_id" required />

      <label for="date"><ion-icon name="calendar-outline"></ion-icon> Date:</label>
      <input type="date" id="date" name="date" required />

      <label for="time"><ion-icon name="time-outline"></ion-icon> Time:</label>
      <input type="time" id="time" name="time" required />

      <label for="num_people"><ion-icon name="people-outline"></ion-icon> Number of People:</label>
      <input type="number" id="num_people" name="num_people" min="1" required />

      <label for="table"><ion-icon name="restaurant-outline"></ion-icon> Table:</label>
      <select name="table" id="table" required>
        <option value="1">Table 1</option>
        <option value="2">Table 2</option>
        <option value="3">Table 3</option>
        <option value="4">Table 4</option>
        <option value="5">Table 5</option>
      </select>

      <button type="submit">Reserve Table</button>
    </form>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>