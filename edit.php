<?php

$sno = $_GET['sno_edit'];
$conn = mysqli_connect('localhost','root','','miniproject');
$sql = "SELECT * from `user` where `sno` = $sno";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$uname = $row['uname'];
$bt = $row['books_taken'];
$rt = $row['return_time'];
$charge = $row['charge'];

if(isset($_POST['submit'])){
    $bt = $_POST['bt'];
    $rt = $_POST['rt'];
    $charge = $_POST['charge'];
    $edit_sql = "UPDATE `user` set `books_taken` = $bt , `return_time` = $rt , `charge` = $charge where `sno` = $sno";
    $eresult = mysqli_query($conn,$edit_sql);
    if($eresult){
        header("location: admin.php");
    }
}

elseif(isset($_POST['cancel'])){
    header("location: admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <main>
        <form method="post">
        <label for="username">Username : </label><?php echo $uname?><br><br>
        <label for="books_taken">Books Taken</label>
        <input type="number" name="bt" value="<?php echo $bt; ?>"><br><br>
        <label for="return_time">Return Time</label>
        <input type="number" name="rt" value="<?php echo $rt; ?>"><br><br>
        <label for="charge">Charges</label>
        <input type="text" name="charge" value="<?php echo $charge; ?>"><br><br>
        <button name="submit">Edit</button>
        <button name='cancel'>Cancel</button>
        </form>
    </main>
</body>
</html>