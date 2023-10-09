<?php

$sno = $_GET['sno_edit'];
$conn = mysqli_connect('localhost', 'root', '', 'miniproject');
$sql = "SELECT * from `add_book` where `b_id` = $sno";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bn = $row['b_name'];
$ab = $row['b_author'];


if (isset($_POST['submit'])) {
    $bn = $_POST['bn'];
    $ab = $_POST['ab'];
    $edit_sql = "UPDATE `add_book` set `b_name` = '$bn' , `b_author`= '$ab' where `b_id` = $sno";
    $eresult = mysqli_query($conn, $edit_sql);
    if ($eresult) {
        header("location: remove_book.php");
    }
} elseif (isset($_POST['cancel'])) {
    header("location: remove_book.php");
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
            <label for="Book name">Books Name</label>
            <input type="text" name="bn" value="<?php echo $bn; ?>"><br><br>
            <label for="Author_name">Author Name</label>
            <input type="text" name="ab" value="<?php echo $ab; ?>"><br><br>
            <button name="submit">Edit</button>
            <button name='cancel'>Cancel</button>
        </form>
    </main>
</body>

</html>