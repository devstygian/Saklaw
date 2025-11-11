<?php
session_start();
include 'db_connection.php';

if (isset($_POST['login'])) {
    $gmail = mysqli_real_escape_string($conn, $_POST['gmail']);
    $password = md5($_POST['password']); // later: use password_hash()

    $sql = "SELECT * FROM userdata WHERE gmail='$gmail' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['gmail'] = $gmail;
        header("Location: ../dashboard/dash.php"); // corrected path
        exit();
    } else {
        $error = "Invalid gmail or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../../../Saklaw/assets/css/auth.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="login">
            <input type="email" name="gmail" placeholder="Gmail" required>
            <input type="password" name="password" placeholder="Password" required>
            <?php if (!empty($error)) echo "<p class='error'>$error</p>";  //pang display ng error?>
            <button type="submit" name="login">Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="../../../Saklaw/pages/auth/signUp.php">Sign up</a></p>
    </div>
</div>

</body>
</html>
