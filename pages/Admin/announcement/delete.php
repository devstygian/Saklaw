<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saklaw";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>");
}

// Get updateID from POST safely
$updateID = isset($_POST['updateID']) ? $_POST['updateID'] : '';

if (!empty($updateID)) {
    // Prepare and execute delete query
    $sql = "DELETE FROM newupdate WHERE updateID = $updateID";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Announcement has been deleted successfully.');
                window.location.href = 'news.php';
              </script>";
    } else {
        echo "<script>
                alert('Error deleting record: " . mysqli_error($conn) . "');
                window.location.href = 'news.php';
              </script>";
    }
} else {
    echo "<script>
            alert('No update ID provided.');
            window.location.href = 'news.php';
          </script>";
}

mysqli_close($conn);
?>
