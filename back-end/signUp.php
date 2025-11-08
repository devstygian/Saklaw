<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saklaw";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $fullname = $_POST['fullname'];
    $zipcode = $_POST['zipcode'];
    $birthday = $_POST['birthday'];
    $gmail = $_POST['gmail'];
    $number = $_POST['number'];

    // Check if username or email exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR gmail='$gmail'");
    if (mysqli_num_rows($check) > 0) {
        echo "Username or gmail already exists.";
    } else {
        // Insert data
        $result = mysqli_query($conn, "INSERT INTO users (username, gmail, password, address, fullname, zipcode, birthday, number) VALUES ('$username', '$gmail', '$password', '$address', '$fullname', '$zipcode', '$birthday', '$number')");
        if ($result) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
  }
mysqli_close($conn);