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
    <title>Add Form</title>
</head>
<body>
    <?php include '../admin.php'; ?>

    <style>
        .main-content-3 {
        max-width: 500px;
        margin-left: 300px;
        margin-top: 100px;
        padding: 25px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .main-content-3 h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .main-content-3 label {
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        color: #444;
    }

    .main-content-3 input[type="text"],
    .main-content-3 input[type="date"] {
        width: 100%;
        padding: 10px;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        margin-bottom: 15px;
        transition: 0.2s;
    }

    .main-content-3 input:focus {
        border-color: #007bff;
        box-shadow: 0 0 4px rgba(0,123,255,0.4);
    }

    .main-content-3 input[type="submit"],
    .main-content-3 button {
        padding: 10px 18px;
        font-size: 15px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-right: 10px;
        transition: 0.2s;
    }

    .main-content-3 input[type="submit"] {
        background: #007bff;
        color: white;
    }

    .main-content-3 button {
        background: #6c757d;
        color: white;
    }

    .main-content-3 button:hover,
    .main-content-3 input[type="submit"]:hover {
        opacity: 0.85;
    }
    </style>
    <div class="main-content-3">
        <form method="post" action="edit.php">
            <h1>Announcement Update</h1>
            <input type="hidden" name="updateID" value="<?php echo $updateID; ?>">

            <label for="title">Title:</label><br>
            <input type="text" name="title" placeholder="Enter title" value="<?php echo $title; ?>" required><br><br>

            <label for="Content">Content:</label><br>
            <input type="text" name="Content" placeholder="Enter Content" value="<?php echo $Content; ?>" required><br><br>

            <label for="date">Date:</label><br>
            <input type="date" name="date" value="<?php echo $date; ?>" required><br><br> 

            <!-- Button sends 'update' action if editing, otherwise 'add' -->
            <input type="submit" name="action" value="<?php echo $updateID ? 'update' : 'Add'; ?>">
            <!--<a><button type="button" onclick="window.location.href='news.php'">Cancel</button></a>-->
            <a href="news.php"><button type="button" >Back</button></a>
        </form>
    </div>
</body>
</html>