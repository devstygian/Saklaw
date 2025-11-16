<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saklaw";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>");
}

// Get POST data safely
$action = isset($_POST['action']) ? $_POST['action'] : '';
$updateID = isset($_POST['updateID']) ? $_POST['updateID'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$content = isset($_POST['Content']) ? $_POST['Content'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';

// Decide action
if ($action === 'delete' && !empty($updateID)) {
    // DELETE
    $sql = "DELETE FROM newupdate WHERE updateID = $updateID";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Announcement has been deleted successfully.');
                window.location.href = 'editForm.php';
              </script>";
    } else {
        echo "<script>
                alert('Error deleting record: " . mysqli_error($conn) . "');
                window.location.href = 'editForm.php';
              </script>";
    }

} elseif ($action === 'Add' && !empty($title) && !empty($content) && !empty($date)) {
    // INSERT
    $sql = "INSERT INTO newupdate (title, Content, date) VALUES ('$title', '$content', '$date')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('New announcement has been added!');
                window.location.href = 'editForm.php';
              </script>";
    } else {
        echo "<script>
                alert('Error adding record: " . mysqli_error($conn) . "');
                window.location.href = 'editForm.php';
              </script>";
    }

} elseif ($action === 'update' && !empty($updateID)) {
    // UPDATE
    $sql = "UPDATE newupdate SET title='$title', Content='$content', date='$date' WHERE updateID=$updateID";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Announcement has been updated successfully.');
                window.location.href = 'editForm.php';
              </script>";
    } else {
        echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
                window.location.href = 'editForm.php';
              </script>";
    }

} else {
    echo "<script>
            window.location.href = 'editForm.php';
          </script>";
}

mysqli_close($conn);
?>
