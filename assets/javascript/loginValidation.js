document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission

    // Clear previous error messages
    document.getElementById('emailError').innerText = '';
    document.getElementById('passwordError').innerText = '';

    // Get form values
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    // Email validation regex
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Password validation regex
    const passwordRegex = /^(?=.*[A-Z])(?=.*\d{3,})(?=.*[@#$%^&+=!]).{8,}$/;

    let valid = true;

    // Validate email
    if (!email) {
      document.getElementById('emailError').innerText = 'Email is required.';
      valid = false;
    } else if (!emailRegex.test(email)) {
      document.getElementById('emailError').innerText = 'Invalid email format.';
      valid = false;
    }

    // Validate password
    if (!password) {
      document.getElementById('passwordError').innerText = 'Password is required.';
      valid = false;
    } else if (!passwordRegex.test(password)) {
      document.getElementById('passwordError').innerText =
        'Password must be at least 8 characters, include 1 uppercase letter, 3 digits, and 1 special character.';
      valid = false;
    }
    console.log(valid);
    // If valid, submit the form 
    if (valid) {
      document.getElementById('loginForm').submit();
    }
  });