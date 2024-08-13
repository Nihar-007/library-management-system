<?php
$servername = "localhost";
$username = "root";
$password = "Nihar007@#";
$dbname = "miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM requests";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/requested_books.css">
    <title>Display Requests</title>
</head>

<body>
    <h2>Requests List</h2>
    <table border="1">
        <tr>
            <th>S. NO.</th>
            <th>Username</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publisher Name</th>
            <th>Status</th>
        </tr>
        <?php
        $num = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $num . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['b_name'] . "</td>";
            echo "<td>" . $row['b_author'] . "</td>";
            echo "<td>" . $row['b_publisher'] . "</td>";
            echo "<td><a href='delete_request.php?sno_del=".$row['r_id']."'>Completed</a></td>";
            echo "</tr>";
            $num++;
        }
        ?>
    </table>
</body>

</html>