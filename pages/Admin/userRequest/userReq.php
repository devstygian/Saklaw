<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Request</title>
</head>
<body>
    <?php include '../admin.php'; ?>

    <div class="main-content">
      <h3>Recent Requests</h3>

      <table class="request-table">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Request Type</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            <?php
            //Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "saklaw";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT dashId, Fullname, RequestType, Date, Status FROM dashboard";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($rows['Fullname']) . "</td>";
                    echo "<td>" . htmlspecialchars($rows['RequestType']) . "</td>";
                    echo "<td>" . htmlspecialchars($rows['Date']) . "</td>";
                    echo "<td>
                            <form method='POST'>
                                <input type='hidden' name='dashId' value='" . $rows['dashId'] . "'>
                                <input type='submit' value='Approve' class='edit-btn'>
                            </form>
                            <br>
                            <form method='POST'>
                                <input type='hidden' name='dashId' value='" . $rows['dashId'] . "'>
                                <input type='hidden' name='newupdate' value='DELETE'>
                                <input type='submit' value='Decline' class='delete-btn'>
                            </form>
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' align='center'>No Result Found</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>