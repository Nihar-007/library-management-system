<?php
    $b_id = $_GET['b_id'];
    $conn = mysqli_connect("localhost","root","","miniproject");
    $sql = "SELECT * from `add_book` where `b_id` = $b_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $bname = $row['b_name'];
    // while($row = mysqli_fetch_assoc($result))

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $bname; ?> </title>
    <link rel="stylesheet" href="css/book_open.css">
</head>
<body>
    <header>
        <p><a href="userpage.php">HOME</a></p>
    </header>
    <main>
        <form method="post">
         <img src="images/<?php echo $row['b_image']; ?>" alt="<?php echo $row['b_name']; ?>" width="150px">
            <div class="contant">
                
                <p><label for="">Book Name</label><?php echo $bname; ?></p>
                <p><label for="">Author Name</label><?php echo $row['b_author']; ?></p>
                <p><label for="">Publisher</label><?php echo $row['b_publisher']; ?></p>
                <p><label for="">Number Of Pages</label><?php echo $row['b_page']; ?></p>
                <p><a href="" Download>Click Here!</a> To Download This Book</p>
            </div>
        </form>
    </main>
    <footer>
        <p id="copy">&copy;Library 2023-2023, All Rights Are Reserved.</p>
    </footer>
</body>
</html>