<?php
session_start();
include 'db_connection.php';

if (isset($_POST['signup'])) {
    $gmail = mysqli_real_escape_string($conn, $_POST['gmail']);
    $password = md5($_POST['password']); // For testing; later use password_hash()

    // Check if Gmail already exists
    $check = mysqli_query($conn, "SELECT * FROM userdata WHERE gmail='$gmail'");
    if (mysqli_num_rows($check) > 0) {
        $error = "Gmail already registered!";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO userdata (gmail, password) VALUES ('$gmail', '$password')");
        if ($insert) {
            $_SESSION['gmail'] = $gmail;
            header("Location: ../dashboard/dash.php"); // Adjust path as needed
            exit();
        } else {
            $error = "Signup failed! Try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup</title>
<link rel="stylesheet" href="../../../Saklaw/assets/css/auth.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-box">
        <h2>Sign-Up</h2>
        <form method="POST" action="signup">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="gmail" placeholder="Gmail" required>
            <input type="password" name="password" placeholder="Password" required>
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
            <button type="submit" name="signup">Sign Up</button>
        </form>
        <p class="signup-link">Already have an account? <a href="../../../Saklaw/pages/auth/login.php">Login</a></p>
    </div>
</div>

</body>
</html>
