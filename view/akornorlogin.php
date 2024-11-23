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
    <script>
      document.getElementById("loginForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        // Get input values
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value;

        // Get error message elements
        const emailError = document.getElementById("emailError");
        const passwordError = document.getElementById("passwordError");

        // Clear previous error messages
        emailError.textContent = "";
        passwordError.textContent = "";

        let valid = true;

        // Email validation
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email === "") {
            emailError.textContent = "Email cannot be empty.";
            valid = false;
        } else if (!emailPattern.test(email)) {
            emailError.textContent = "Please enter a valid email address.";
            valid = false;
        }

        // Password validation
        if (password === "") {
            passwordError.textContent = "Password cannot be empty.";
            valid = false;
        }

        // If the form is valid, proceed
        if (valid) {
            // Create a FormData object to send data
            const formData = new FormData();
            formData.append("email", email);
            formData.append("password", password);

            // Send the data to the server
            fetch("../actions/login_user.php", {
                method: "POST",
                body: formData,
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                if (data.success) {
                    // Login successful
                    alert("Login successful! Redirecting to dashboard...");
                    window.location.href = "./admin/dashboard.php"; // Redirect to dashboard

                } else {
                    // Display server-side validation errors
                    if (data.errors && data.errors.general) {
                        alert(data.errors.general); // Show general error message
                    }
                }
            })
            .catch((error) => {
                console.log("Error:", error);
                alert("An error occurred while processing your request. Please try again.");
            });
        }
      });
    </script>
  </body>
</html>
