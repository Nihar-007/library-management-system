<?php
    $b_id = $_GET['b_id'];
    $conn = mysqli_connect("localhost","root","","miniproject");
    $sql = "SELECT * from `add_book` where `b_id` = $b_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $bname = $row['b_name'];
    // while($row = mysqli_fetch_assoc($result))

?>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    header {
        background-color: black;
        width: 100%;
        height: 5vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    header > a{
        color: white;
        text-decoration: none;
    }
    main{
        height: 90vh;
    }
    footer{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 5vh;
        background-color: black;
        color: white;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $bname; ?> </title>
</head>
<body>
    <header>
        <a href="userpage.php">HOME</a>
    </header>
    <main>
        <form method="post">
            <div>
                <p>Book Image : <img src="images/<?php echo $row['b_image']; ?>" alt="<?php echo $row['b_name']; ?>"></p>
                <p>Book Name : <?php echo $bname; ?></p>
                <p>Author Name : <?php echo $row['b_author']; ?></p>
                <p>Publisher : <?php echo $row['b_publisher']; ?></p>
                <p>Number Of Pages : <?php echo $row['b_page']; ?></p>
                <p><a href="">Click Here!</a> To Download This Book</p>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy;Library 2023-2023, All Rights Are Reserved.</p>
    </footer>
</body>
</html>