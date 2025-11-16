<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" href="../../../assets/css/news.css" />
</head>
<body>
    <?php include '../admin.php'; ?>

    <div class="main-content-3">
      <h3>Announcements</h3>

      <table class="request-table-3">
        <thead>
          <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Date Posted</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "saklaw";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM newupdate";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($rows = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($rows["title"]) . "</td>";
                echo "<td>" . htmlspecialchars($rows["Content"]) . "</td>";
                echo "<td>" . htmlspecialchars($rows["date"]) . "</td>";

                echo "<td>
                        <form method='POST' action='edit.php'>
                            <input type='hidden' name='updateID' value='" . $rows['updateID'] . "'>
                            <input type='submit' value='Edit' class='edit-btn'>
                        </form>
                        <br>
                        <form method='POST' action='delete.php'>
                            <input type='hidden' name='updateID' value='" . $rows['updateID'] . "'>
                            <input type='hidden' name='newupdate' value='DELETE'>
                            <input type='submit' value='Delete' class='delete-btn'>
                        </form>
                      </td>";
                echo "</tr>";
            }

        } else {
            echo "<tr><td colspan='4' align='center'>No Result Found</td></tr>";
            
            echo "<tr>
                    <td colspan='4' align='center'>
                        <form method='POST' action='edit.php'>
                            <input type='submit' value='Add Announcement' class='edit-btn'>
                        </form>
                    </td>
                  </tr>";
        }

        mysqli_close($conn);
        ?>

        </tbody>
      </table>
    </div>
</body>
</html>
