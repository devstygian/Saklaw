<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <script src="../../../Saklaw/assets/js/home.js"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/f02a36f28e.js" crossorigin="anonymous"></script>

  <!-- Your CSS -->
  <link rel="stylesheet" href="../../../assets/css/admin.css" />
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="logo-section">
        <i class="fa-solid fa-circle-user"></i>
      </div>
      <div class="logo">Admin</div>
      <ul class="menu list-unstyled">
        <li><a href="../../../pages/admin/dashboard/dash.php"><i class="fa-solid fa-grip"></i> Dashboard</a></li>
        <li><a href="../../../pages/admin/userRequest/userReq.php"><i class="fa-solid fa-table-columns"></i> User Request</a></li>
        <li><a href="../../../pages/admin/anouncement/news.php"><i class="fa-solid fa-bullhorn"></i> Announcements</a></li>
        <li><a href="../../../pages/admin/reports/report.php"><i class="fa-solid fa-flag"></i> Reports</a></li>
      </ul>
      <div class="footer">
        <a href="../back-end/adminlogout.php" class="text-decoration-none">
          <i class="fa-solid fa-right-from-bracket"></i>
        </a>
      </div>
    </div>

    <!-- Top Navbar -->
    <div class="navbar">
      <h2>Welcome, Admin</h2>
    </div>
</body>
</html>
