<?php

 //                 Dummy Code ALL AI Generated                 //


// Process form
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "charity_db");
    if ($conn) {
        $sql = "INSERT INTO donors (fullname, email, amount) VALUES ('$fullname', '$email', '$amount')";
        mysqli_query($conn, $sql);
    }

    // PayPal Settings
    $paypalUrl = "https://www.sandbox.paypal.com/cgi-bin/webscr"; // sandbox
    $paypalId = "YOUR_PAYPAL_BUSINESS_EMAIL@example.com";

    echo '<form id="paypalForm" action="'.$paypalUrl.'" method="post">
        <input type="hidden" name="business" value="'.$paypalId.'">
        <input type="hidden" name="cmd" value="_donations">
        <input type="hidden" name="item_name" value="Charity Donation">
        <input type="hidden" name="amount" value="'.$amount.'">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="http://yourwebsite.com/thankyou.php">
        <input type="hidden" name="cancel_return" value="http://yourwebsite.com/cancel.php">
    </form>
    <script>document.getElementById("paypalForm").submit();</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Charity Donation</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: #f4f7f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .donation-card {
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        width: 400px;
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    input[type="submit"] {
        background: #28a745;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
    }
    input[type="submit"]:hover {
        background: #218838;
    }
    .note {
        font-size: 12px;
        color: #888;
        text-align: center;
    }
</style>
</head>
<body>

<div class="donation-card">
    <h2>Donate to Charity</h2>
    <form action="" method="post">
        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Donation Amount (USD)</label>
        <input type="number" name="amount" step="0.01" required>

        <input type="submit" name="submit" value="Donate via PayPal">
    </form>
    <p class="note">You will be redirected to PayPal to complete your donation.</p>
</div>

</body>
</html>
