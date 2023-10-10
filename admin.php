<?php
$conn = mysqli_connect("localhost", "root", "", "miniproject");
$sql = "SELECT * from `login`";
$result = mysqli_query($conn, $sql);
// $row1=mysqli_fetch_assoc($result);
session_start();
$name = $_SESSION['uname'];
if ($_SESSION['login'] != true) {
    header("location : login.php");
}
// $_SESSION['sno'] = $row1['sno'] ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Portal</title>
</head>

<body>
    <header>
        <span class="greet top">Welcome to admin Portal</span>
        <span class="home-link"><a href="admin_panel.php">Home</a></span>
        <!-- <span class="logout top"><a href="logout.php">Logout</a></span> -->
        <span class="search">
            <form method="post">
                <input type="text" name="isearch" id="isearc" class="search-input">
                <button type="submit" class="ed sbtn" name='bsearch'>Search</button>
            </form>
        </span>
    </header>
    <main>
        <div>
            <h3><center>Welcome <?php echo $name; ?></center></h3>
            <table>
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Created On</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    $nosearch = true;
                    // if ($_SERVER['REQUEST_METHOD'] == 'post') {
                    if (isset($_POST['bsearch'])) {
                        $nosearch = false;
                        if ($nosearch == false) {
                            $isearch = $_POST['isearch'];
                            $sql = "SELECT * from `login` where `uname` like '%$isearch%'";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $_SESSION['sno'] = $row['sno'];
                                echo "<tr>
                                <td>" . $num . "</td>
                                <td>" . $row['fname'] . " " . $row['lname'] . "</td>
                                <td>" . $row['uname'] . "</td>
                                <td>" . $row['pwd'] . "</td>
                                <td>" . $row['created_on'] . "</td>
                                <td><a href='edit.php?sno_edit=" . $row['sno'] . "'><button class='edit-btn'>Edit</button></a>
                                            <a href='delete.php?sno_delete=" . $row['sno'] . "'><button class='delete-btn'>Delete</button></a></td>
                                        </tr>";
                                $num++;
                            }
                        }
                    } elseif ($nosearch == true) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $_SESSION['sno'] = $row['sno'];
                            echo "<tr>
                                <td>" . $num . "</td>
                                <td>" . $row['fname'] . " " . $row['lname'] . "</td>
                                <td>" . $row['uname'] . "</td>
                                <td>" . $row['pwd'] . "</td>
                                <td>" . $row['created_on'] . "</td>
                                <td><a href='edit.php?sno_edit=" . $row['sno'] . "'><button class='edit-btn'>Edit</button></a>
                                <a href='delete.php?sno_delete=" . $row['sno'] . "'><button class='delete-btn'>Delete</button></a></td>
                                </tr>";
                            $num++;
                        }
                    }
                    // }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- <footer>
        <p>&copy;Copyright 2023-2023 SOU Library. All rights are reserved.</p>
    </footer> -->
</body>
<script>
    function auth() {
        let a = document.getElementById("isearc").value;
        document.writeln(a);
    }
</script>

</html>