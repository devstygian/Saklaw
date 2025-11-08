<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saklaw";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$newupdate = isset($_POST['newupdate']) ? $_POST['newupdate'] : '';
$updateID = isset($_POST['updateID']) ? $_POST['updateID'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$Content = isset($_POST['Content']) ? $_POST['Content'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';

if (!empty($title) && !empty($Content) && !empty($date)) {
    if ($newupdate == "ADD BOOK") {

        $sql = "INSERT INTO book (title, Content, date)
                VALUES ('$title', '$Content', '$date')";
        $msg = "New announcement has been added!";

    } else {

        $sql = "UPDATE book 
                SET title='$title', Content='$Content', date='$date' 
                WHERE id='$updateID'";
        $msg = "Announcement has been updated!";

    }

    if (mysqli_query($conn, $sql)) {
        echo $msg;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>