<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conn = mysqli_connect("localhost", "root", "", "miniproject");
    $uname = $_POST['username'];
    $bname = $_POST['bookName'];
    $bauthor = $_POST['authorName'];
    $pname = $_POST['publisherName'];
    if(isset($_POST['submit'])){
        $sql = "INSERT into `requests` (`username`,`b_name`,`b_author`,`b_publisher`) values ('$uname','$bname','$bauthor','$pname')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: userpage.php");
        }
    }

    elseif(isset($_POST["cancel"])) {
        header("location: userpage.php");
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Book Request Form</title>
    <link rel="stylesheet" href="css/book_request_user.css">
</head>

<body>

    <!-- <div class="btn_container">
        <button class="btn">Request book</button>
    </div> -->
    <div class="request-book-container">
        <h2>Book Request Form</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="bookName">Book Name:</label>
                <input type="text" id="bookName" name="bookName" required>
            </div>
            <div class="form-group">
                <label for="authorName">Author Name:</label>
                <input type="text" id="authorName" name="authorName" required>
            </div>
            <div class="form-group">
                <label for="publisherName">Publisher Name:</label>
                <input type="text" id="publisherName" name="publisherName" required>
            </div>
            <input type="submit" name="submit" value="Submit">
            <button name="cancel" class="cancel-btn" formnovalidate>Cancel</button>
        </form>
    </div>

    <!-- <script>
       const container = document.querySelector('.request-book-container');
        const requestLink = document.querySelector('.btn');
        const cancelBtn = document.querySelector('.cancel-btn');

        requestLink.addEventListener('click', () => {
            container.classList.add('active-popup-request');
        });

        cancelBtn.addEventListener('click', () => {
            container.classList.remove('active-popup-request');
        });
    </script> -->
</body>

</html>