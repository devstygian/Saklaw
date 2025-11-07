<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/f02a36f28e.js" crossorigin="anonymous"></script>

  <!-- Your CSS -->
  <link rel="stylesheet" href="../../assets/css/admin.css" />
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
        <li><a href="dashboard.php"><i class="fa-solid fa-grip"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa-solid fa-table-columns"></i> User Request</a></li>
        <li><a href="createcandidates.php"><i class="fa-solid fa-bullhorn"></i> Announcements</a></li>
        <li><a href="createstelcom.php"><i class="fa-solid fa-flag"></i> Reports</a></li>
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

    <!-- Main Content -->
    <div class="main-content">
      <h3>Recent Requests</h3>

      <table class="request-table">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Request Type</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // ✅ Database connection
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "saklaw";

          $conn = mysqli_connect($servername, $username, $password, $dbname);

          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // ✅ Adjust query & column names to match your table
          $sql = "SELECT Fullname, RequestType, Date, Status FROM dashboard";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while ($rows = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . htmlspecialchars($rows["Fullname"]) . "</td>";
                  echo "<td>" . htmlspecialchars($rows["RequestType"]) . "</td>";
                  echo "<td>" . htmlspecialchars($rows["Date"]) . "</td>";
                  echo "<td>" . htmlspecialchars($rows["Status"]) . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='4' align='center'>No Result Found</td></tr>";
          }

          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
