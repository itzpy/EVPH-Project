<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta name="Author" content="Papa Yaw Badu" />
    <title>Register - Recipe Sharing Platform</title>
    <link rel="stylesheet" href="../assets/css/akornor.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Register</h2>
      <form id="signupForm">
        <label for="username">Username</label>
        <div class="input-icon">
          <ion-icon name="person-outline"></ion-icon>
          <input
            type="email"
            id="username"
            name="username"
            placeholder="Create a username"
            required
          />
        </div>
        <span id="usernameError" class="error"></span>

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
        <span id="emailError" class="error"></span>

        <label for="password">Password</label>
        <div class="input-icon">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Create a password"
            required
          />
        </div>
        <span id="passwordError" class="error"></span>

        <label for="confirm-password">Confirm Password</label>
        <div class="input-icon">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm your password"
            required
          />
        </div>
        <span id="confirmPasswordError" class="error"></span>

        <button type="submit">Sign Up</button>
      </form>
      <p>
        Do you Already have an account? <a href="akornorlogin.php">Login</a>
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

    <script src="/../assets/javascript/register.js"></script>
  </body>
</html>
