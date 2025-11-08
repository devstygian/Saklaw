<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Saklaw - Clearance Form</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f02a36f28e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../assets/css/complaints.css" />
</head>
<body>
  <header class="site-header">
    <div class="wrap header-inner">
      <div class="logo">
        <img src="https://imgs.search.brave.com/ln_ju330B84pQ05S5Y941vpBrCrGWaJqRw5jIcPPf-I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9h/L2EzL1BHUF9OZXdf/T2ZmaWNpYWxfU2Vh/bC5wbmc" alt="Barangay Seal" />
        <div class="logo-text">
          <strong>BARANGAY</strong>
          <span class="sub">Digital Citizen Portal</span>
        </div>
      </div>

      <nav class="main-nav" aria-label="Main navigation">
        <a href="../../home.html">Home</a>
        <a href="../../home.html#services">Services</a>
        <a href="../../home.html#announcements">Announcements</a>
        <a href="../../home.html#about">About</a>
      </nav>
    </div>

    
  </header>

  <main class="form-container">
    <h2 class="section-title">Complaints Form</h2>
    <form action="" method="POST" class="clearance-form">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="1" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="purpose">List your Complaints:</label>
      <textarea id="purpose" name="purpose" rows="3" required></textarea>

      <label for="request_date">Date of Request:</label>
      <input type="date" id="request_date" name="request_date" required>

      <button type="submit" name="submit" class="submit-btn">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $fullname = htmlspecialchars($_POST['fullname']);
      $age = htmlspecialchars($_POST['age']);
      $civil_status = htmlspecialchars($_POST['civil_status']);
      $address = htmlspecialchars($_POST['address']);
      $purpose = htmlspecialchars($_POST['purpose']);
      $request_date = htmlspecialchars($_POST['request_date']);
      $CTC = htmlspecialchars($_POST['CTC']);
      $issueAt = htmlspecialchars($_POST['Issue at']);
      $issueOn = htmlspecialchars($_POST['Issued On']);


      echo "<div class='form-output' role='status' aria-live='polite'>";
      echo "<h3>Form Submitted Successfully!</h3>";
      echo "<p><strong>Full Name:</strong> $fullname</p>";
      echo "<p><strong>Age:</strong> $age</p>";
      echo "<p><strong>Civil Status:</strong> $civil_status</p>";
      echo "<p><strong>Address:</strong> $address</p>";
      echo "<p><strong>Purpose:</strong> $purpose</p>";
      echo "<p><strong>Date of Request:</strong> $request_date</p>";
      echo "<p><strong>Community Tax Certificate (CTC):</strong> $CTC</p>";
      echo "<p><strong>Issue At:</strong> $issueAt</p>";
      echo "<p><strong>Issued On:</strong> $issueOn</p>";
      echo "</div>";
    }
    ?>
  </main>
</body>
</html>
