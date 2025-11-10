
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

    $idregistration = "";
    $username = '';
    $password ='';
    $address = '';
    $fullname = '';
    $ziipcode = '';
    $birthday = '';
    $gmail = '';
    $number = '';
    $mode = 'ADD USER';

if($_SERVER ["REQUEST_METHOD"] == "POST" && isset($_POST ['idregistration'])){
    $idregistration = $_POST ['idregistration'];
    $sql = "SELECT * FROM registration WHERE idregistration = '$idregistration'";
    $result = mysqli_query($conn, $sql);
}
if ($result && mysqli_num_rows($result) > 0 ){
        $row = mysqli_fetch_assoc($result);
        $idregistration = $_POST['idregistration'];
    }
   ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Saklaw - Clearance Form</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f02a36f28e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../assets/css/SignIn.css" />
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

  <div class="container">
    <h2 class="signIn-Text">Sign Up</h2>
    <form class="signIn-form" action="register.php" method="POST">
      <input  type="hidden" name="idregistration" value="<?php echo $idregistration ?>">
      <label>Gmail</label>
      <input type="Gmail" name="gmail" value="<?php echo $gmail?>"required>
      
      <label>Contact Number</label>
      <input type="tel" name="number" maxlength="11" pattern="[0-9]{11}"value="<?php echo $number?>" required>

      <label>username</label>
      <input type="text" name="username" value="<?php echo $username ?>" required>

      <label>Password</label>
      <input type="password" name="password" value="<?php echo $password ?>" required>

      <label>Fullname</label>
      <input type="text" name="fullname" value="<?php echo $fullname ?>" required>

      <label>Birthday</label>
      <input type="date" name="birthday" value="<?php echo $birthday?>"required >

      <label>Address</label>
      <input type="text" name="address" value="<?php echo $address?>"required>

      <label>ZIP CODE</label>
      <input type="number" name="zipcode" value="<?php echo $zipcode?>"required>
      <button type="submit" class="submit-btn" value="SignIn" name="action" value="<?php $mode?>">Sign In</button>

    </form>
  </div>

<?php
          mysqli_close($conn);
  ?>

</body>
</html>
