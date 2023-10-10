<?php

$sno = $_GET['sno_edit'];
$conn = mysqli_connect('localhost', 'root', '', 'miniproject');
$sql = "SELECT * from `add_book` where `b_id` = $sno";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bn = $row['b_name'];
$ab = $row['b_author'];
$cate = $row['b_category'];
$qty = $row['b_quantity'];


if (isset($_POST['submit'])) {
    $bn = $_POST['bn'];
    $ab = $_POST['ab'];
    $cate = $_POST['cate'];
    $qty = $_POST['qty'];
    $edit_sql = "UPDATE `add_book` set `b_name` = '$bn' , `b_author`= '$ab' , `b_category` = '$cate' , `b_quantity` = $qty where `b_id` = $sno";
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
    <link rel="stylesheet" href="css/edit_book.css">
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
            
            <label for="cate">Category :</label>
            <input type="text" name="cate" value="<?php echo $cate; ?>" autocapitalize="on"><br><br>

            <label for="qty">Quantity :</label>
            <input type="number" name="qty" value="<?php echo $qty; ?>" maxlength="2"><br><br>
            
            <button name="submit">Edit</button>
            <button name='cancel'>Cancel</button>
        
        </form>
    </main>
</body>

</html>