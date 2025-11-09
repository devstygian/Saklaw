<?php

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "saklaw";

$conn = mysqli_connect($servername, $username,$password,$dbname);

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
$updateID ="";
$title ="";
$Content="";
$date="";
$mode="ADD ANNOUNCEMENT";

if($_SERVER ["REQUEST_METHOD"] == "POST" && isset($_POST ['updateID'])){

    $updateID = $_POST ['updateID'];

    $sql = "SELECT * FROM newupdate WHERE updateID = '$updateID'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0 ){

        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $Content = $row['Content'];
        $date = $row['date'];
        $mode = "UPDATE ANNOUNCEMENT";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="../../../assets/css/news.css" />

</head>
<body>
    <?php include '../admin.php'; ?>

    <!-- Main Content -->
    <div class="main-content-3">
        <form method="post" action="edit.php">
    <h1>Announcement Update</h1>

    <!-- Hidden input for updateID -->
    <input type="hidden" name="updateID" value="<?php echo $updateID; ?>">

    <label for="title">Title:</label><br>
    <input type="text" name="title" placeholder="Enter title" value="<?php echo $title; ?>" required><br><br>

    <label for="Content">Content:</label><br>
    <input type="text" name="Content" placeholder="Enter Content" value="<?php echo $Content; ?>" required><br><br>

    <label for="date">Date:</label><br>
    <input type="date" name="date" value="<?php echo $date; ?>" required><br><br> 

    <!-- Button sends 'update' action if editing, otherwise 'add' -->
    <input type="submit" name="action" value="<?php echo $updateID ? 'update' : 'add'; ?>">
    <a><button type="button" onclick="window.location.href='news.php'">Cancel</button></a>
    <a href="news.php"><button type="button" >Back</button></a>
</form>

</body>
</html>