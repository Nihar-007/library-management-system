<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `issue_book`";
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
    <title>Return Book</title>
</head>

<body>
    <h2>Issued Book's List</h2>
    <table border="1">
        <tr>
            <th>S. NO.</th>
            <th>Username</th>
            <th>Book Name</th>
            <th>Issue Date</th>
            <th>Return Date</th>
            <th>Charges</th>
            <th>Status</th>
        </tr>
        <?php
        $num = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $num . "</td>";
            echo "<td>" . $row['uname'] . "</td>";
            echo "<td>" . $row['b_name'] . "</td>";
            echo "<td>" . $row['issue_date'] . "</td>";
            echo "<td>" . $row['return_date'] . "</td>";
            echo "<td>" . $row['charges'] . "</td>";
            echo "<td><a href='delete_return_book.php?sno_del=" . $row['sno'] . "'>Return</a></td>";
            echo "</tr>";
            $num++;
        }
        ?>
    </table>
</body>

</html>