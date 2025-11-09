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
</head>
<body>
    <?php include '../admin.php'; ?>

    <!-- Main Content -->
    <div class="container">
        <form method="post" action="edit.php">
            <h1>FORM STUDENT</h1>
            <label for="title">title:</label><br>
            <input type="text" name="title" placeholder="Enter title" value="<?php echo $title; ?>"required><br><br>

            <label for="Content">Content</label><br>
            <input type="text" name="Content" placeholder="Enter Content" value="<?php echo $Content ; ?>"required><br><br>

            <label for="date">date:</label><br>
            <input type="date" name="date" placeholder="Enter date" value="<?php echo $date; ?>"required><br><br> 
            <input type="submit" name="action" value="<?php echo $mode; ?>">
        </div>
    </form>
</body>
</html>