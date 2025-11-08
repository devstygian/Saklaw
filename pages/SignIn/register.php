
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
             
              $username = $_POST['username'];
              $password = $_POST['password'];
              $address = $_POST['address'];
              $fullname = $_POST['fullname'];
              $zipcode = $_POST['zipcode'];
              $birthday = $_POST['birthday'];
              $gmail = $_POST['gmail'];
              $number = $_POST['number'];

        if(!empty($fullname) || !empty($username) || !empty($password) || !empty($address) || !empty($zipcode) || !empty($birthday) || !empty($gmail) || !empty($number)){
              $INSERT = "INSERT INTO userdata (userID, username, password, Address, Fullname, `ZIP-CODE`, Birthday, Gmail, Number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
              $stmt = $conn->prepare($INSERT);
              $stmt->bind_param("issssssis", $userID, $username, $password, $address, $fullname, $zipcode, $birthday, $gmail, $number);
              $stmt->execute();
              echo "New record inserted successfully";
              $stmt->close();
              $conn->close();
        }
          ?>
<?php
          mysqli_close($conn);
  ?>
  <?php
// Example login validation
if ($login_successful) {
    // Redirect to another website after login
    header("Location: saklaw/home.html");
    exit();
} else {
    echo "Invalid credentials";
}
?>