<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - HR Management System</title>
  <link rel="stylesheet" href="../../style/register.css">
  <link rel="icon" href="../../images/assets/logo.png">
</head>

<body>
  <header></header>

  <div class="register-container">
    <img src="../../images/assets/logo.png" alt="Logo">
    <h2><span>Hyacinth</span> - Register</h2>

    <form onsubmit="return register()">
      <div class="email-container">
        <p>Full Name</p>
        <input type="text" placeholder="Enter your full name" required>
      </div>

      <div class="email-container">
        <p>Email</p>
        <input type="email" placeholder="Enter your email" required>
      </div>



      <div class="password-container">
        <p>Password</p>
        <input type="password" placeholder="Enter password" required>
      </div>

      <div class="password-container">
        <p>Confirm Password</p>
        <input type="password" placeholder="Re-enter password" required>
      </div>

      <div class="button-container">
        <button type="submit">Register</button>
        <p>Already have an account? <a href="login.html"><span>Login</span></a></p>
      </div>
    </form>
  </div>

  <script>
    function register() {
      // Simulate successful registration
      alert("Account registered successfully!");
      window.location.href = "login.html"; // Redirect to login
      return false;
    }
  </script>
</body>

</html>