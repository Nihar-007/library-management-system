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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .request-book-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            /* transform: scale(0); */
            transition: all ease .5s;
            padding-right: 40px;
        }

        /* .request-book-container.active-popup-request {
            transform: scale(1);
        } */
        .form-group {
            /* box-shadow: 0px 12px 24px rgba(2,30,84,.1); */
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        button {
            background-color: red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(149, 9, 9);
        }
    </style>
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