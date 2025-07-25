<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - HR Management System</title>
  <link rel="stylesheet" href="../../style/login.css">
  <link rel="icon" href="../../images/assets/logo.png">
</head>

<body>
  <header></header>

  <div class="login-container">
    <img src="../../images/assets/logo.png" alt="">
    <h2> <span>Hyacinth</span> - HRMS</h2>
    <form onsubmit="return login()">
      <div class="email-container">
        <p>Email</p>
        <input type="text" placeholder="Email or Username">
      </div>

      <div class="password-container">
        <p>Password</p>
        <input type="password" placeholder="Enter Password">
        <p class="forgot"><a href="#">Forgot Password?</a></p>
      </div>

      <div class="button-container">
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="#"><span>Register</span></a></p>
      </div>
    </form>
  </div>

  <script src="../../js/img.js"></script>
  <script>
    function login() {
      window.location.href = '../dashboard/dashboard.php';
      return false; 
    }
  </script>
</body>

</html>
