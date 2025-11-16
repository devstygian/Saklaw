<?php
session_start();
include 'db_connection.php';

$error = "";

if (isset($_POST['login'])) {
    $gmail = mysqli_real_escape_string($conn, $_POST['gmail']);
    $password = $_POST['password']; 
\\
    $sql = "SELECT * FROM userdata WHERE gmail='$gmail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['gmail'] = $user['gmail']; 
            header("Location: ../Saklaw/home.php");
            exit();
        } else {
            $error = "Invalid gmail or password!";
        }
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    .password-wrapper {
        position: relative;
        width: 100%;
    }

    .password-wrapper input {
        width: 100%;
        padding-right: 40px; 
        box-sizing: border-box;
    }

    .password-wrapper #togglePassword {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #666;
        font-size: 1.2rem;
    }
  </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="">
            <input type="email" name="gmail" placeholder="Gmail" required>

            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
            </div>

            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

            <button type="submit" name="login">Login</button>
        </form>

        <p class="signup-link">
            Don't have an account? 
            <a href="../../../Saklaw/pages/auth/signUp.php">Sign up</a>
        </p>
    </div>
</div>

<script>
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("bi-eye");
    this.classList.toggle("bi-eye-slash");
});
</script>

</body>
</html>
