<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hyacinth-Dashboard</title>
  <link rel="stylesheet" href="/style/dashboard.css">
</head>

<body>
  <!-- Sidebar PHP CALLER -->
  <?php require __DIR__ . '/../sidebar/sidebar.html'; ?>

  <!-- Dashboard Content -->
  <div class="wrap-container">
    <h1>Dashboard Overview</h1>
    <p>Welcome to your HRMS dashboard!</p>

    <!-- Stats Cards -->
    <div class="stats-grid">
      <div class="stat-card">
        <span class="material-symbols-outlined stat-icon">group</span>
        <h3>Total Employees</h3>
        <span id="total-employees">0</span>
      </div>
      <div class="stat-card">
        <span class="material-symbols-outlined stat-icon">verified_user</span>
        <h3>Active Employees</h3>
        <span id="active-employees">0</span>
      </div>
      <div class="stat-card">
        <span class="material-symbols-outlined stat-icon">business</span>
        <h3>Departments</h3>
        <span id="departments">0</span>
      </div>
    </div>

    <!-- Departments Section -->
    <section class="departments-section">
      <h2>Departments</h2>
      <input type="text" id="dept-search" placeholder="Search department..." />
      <div class="dept-list" id="dept-list"></div>
    </section>
  </div>

  <script src="/js/dashboard.js"></script>
  <script src="/js/img.js"></script>


</body>

</html>