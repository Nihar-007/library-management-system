<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = "localhost";
    $root = "root";
    $pwd = "";
    $database = "miniproject";

    $conn = mysqli_connect($username, $root, $pwd, $database);

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    $exists_sql = "SELECT * FROM `login` WHERE `uname` = '$uname' ";
    $result = mysqli_query($conn, $exists_sql);
    $exists = mysqli_num_rows($result);
    if ($exists > 0) {
        echo '<script> alert("Username already exists. Please try another one."); </script>';
    } else {
        if ($pass == $cpass) {
            $sql = "INSERT INTO `login` (`fname`,`lname`,`uname`,`pwd`) values ('$fname','$lname','$uname','$pass')";
            $result = mysqli_query($conn, $sql);
            echo '<script> alert("Account Created."); </script>';
            header("location: login.php");
        } else {
            echo '<script> alert("Passwords dont match please try again."); </script>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking CSS File -->
    <link rel="stylesheet" href="login.css">
    <title>Sign-Up</title>
</head>

<body>
    <header>
        <p>Welcome to Sign-up page</p>
    </header>
    <main>
        <form method="POST">
            <label for="fname">First name</label>
            <input type="text" name="fname" id="fname" required><br><br>

            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" required><br><br>

            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" required><br><br>

            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" minlength="8" required><br><br>

            <label for="cpass">Confirm Password</label>
            <input type="password" name="cpass" id="cpass" minlength="8" required><br><br>

            <button type="submit">Sign-Up</button>
            <p>Already have an account with us ? <a href="login.php">Click Here!</a></p>
        </form>
    </main>
    <footer>
        <p>&copy; Copywrite 2023-2023, SOU. All rights are reserved.</p>
    </footer>
</body>

</html>