<?php

$sno = $_GET['sno_edit'];
$conn = mysqli_connect('localhost', 'root', '', 'miniproject');
$sql = "SELECT * from `login` where `sno` = $sno";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$uname = $row['uname'];
$fn = $row['fname'];
$ln = $row['lname'];
$pwd = $row['pwd'];

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $edit_sql = "UPDATE `login` set `fname` = '$fn' , `lname` = '$ln',`uname`='$uname' , `pwd` = '$pwd' where `sno` = $sno";
    $eresult = mysqli_query($conn, $edit_sql);
    if ($eresult) {
        header("location: admin.php");
    }
} elseif (isset($_POST['cancel'])) {
    header("location: admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Edit</title>
</head>

<body>
    <main>
        <form method="post">
            <label for="first_name">First Name : </label>
            <input type="text" name="fname" value="<?php echo $fn; ?>"><br><br>

            <label for="last_name">Last Name : </label>
            <input type="text" name="lname" value="<?php echo $ln; ?>"><br><br>
            
            <label for="username">Username : </label>
            <input type="text" name="uname" value="<?php echo $uname;?>"><br><br>

            <label for="pwd">Password : </label>
            <input type="text" name="pwd" value="<?php echo $pwd; ?>"><br><br>
            <button name="submit">Edit</button>
            <button name='cancel'>Cancel</button>
        </form>
    </main>
</body>

</html>