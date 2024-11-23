<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Author" content="EVPH" />

    <title>Login - Akornor Platform</title>
    <link rel="stylesheet" href="../assets/css/akornor.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Login</h2>
      <form id="loginForm">
        <label for="email">Email</label>
        <div class="input-icon">
          <ion-icon name="mail-outline"></ion-icon>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
          />
        </div>
        <span id="emailError" class="error"> </span>

        <label for="password">Password</label>
        <div class="input-icon">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
          />
        </div>
        <span id="passwordError" class="error"></span>

        <button type="submit">Login</button>
      </form>

      <p>
        Ei! Don't have an account? <a href="akornorsignup.php">Register </a>
      </p>
      <p><a href="../akornorhome.php">Back to Home</a></p>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script src="../assets/javascript/login.js"></script>
  </body>
</html>
