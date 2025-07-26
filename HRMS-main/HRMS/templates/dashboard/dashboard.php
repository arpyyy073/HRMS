<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hyacinth-Dashboard</title>
  <link rel="stylesheet" href="../../style/dashboard.css">
</head>

<body>
  <!-- Sidebar PHP CALLER -->
  <?php require __DIR__ . '/../sidebar/sidebar.html'; ?>

  <!-- Dashboard Content -->
  <div class="wrap-container">
    <h1>Dashboard Overview</h1>
    <p>Welcome to your HRMS dashboard!</p>

<div class="dashboard-layout">
  <!-- Left Column -->
  <div class="left-column">
    <div class="stat-card-total">Total Employees</div>
  </div>

  <!-- Middle Column -->
  <div class="middle-column">
    <div class="stat-card">RAHYO</div>
    <div class="stat-card">HHI</div>
  </div>

  <!-- Right Grid -->
  <div class="dept-cards">
    <div class="stat-card-dept">ADMIN</div>
    <div class="stat-card-dept">INTERN</div>
    <div class="stat-card-dept">BDR</div>
    <div class="stat-card-dept">JFK & HCP: LIA</div>
    <div class="stat-card-dept">RMNYC</div>
    <div class="stat-card-dept">RMNYC & DAWN LOVE</div>
    <div class="stat-card-dept">SEAN HAND - ADMIN</div>
    <div class="stat-card-dept">TGQS</div>
    <div class="stat-card-dept">UHAI</div>
    <div class="stat-card-dept">UNICORN</div>
  </div>
</div>

<div class="notif-container">
  <h2>Notification</h2>
  <div class="notification-card">
    <p class="notif-title">New Employee Added</p>
    <p class="notif-time">Just now</p>
  </div>
  <div class="notification-card">
    <p class="notif-title">System updated successfully</p>
    <p class="notif-time">10 minutes ago</p>
  </div>
</div>



  <script src="../../js/dashboard.js"></script>
  <script src="../../js/img.js"></script>
</body>


</html>