<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saklaw";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$_REQUEST


if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $rows["title"] . "</td>";
        echo "<td>" . $rows["Content"] . "</td>";
        echo "<td>" . $rows["date"] . "</td>";

        echo "<td>
    
    }
} else {
    echo "<tr><td colspan='6' align='center'>No Result Found!!</td></tr>";
}

mysqli_close($conn);
?>