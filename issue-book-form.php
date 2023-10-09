<?php
$conn = mysqli_connect("localhost","root","","miniproject");
$uname = $_POST['username'];
$bname = $_POST['username'];
$uname = $_POST['username'];
$uname = $_POST['username'];
$sql = "INSERT into `requests` () values ()";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Issuance Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .issue-book-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 29px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            /* transform: scale(0); */
            transition: all ease .5s;
            padding-right: 43px;
        }
         
        /* .issue-book-container.active-popup-issue{
            transform: scale(1);
        } */


        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        button[type="button"] {
            background-color: red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="button"]:hover {
            background-color: rgb(149, 9, 9);
        }
    </style>
</head>
<body>
    <!-- <div class="btn_container">
        <button class="btn">Issue Book</button>
    </div> -->
    <div class="issue-book-container">
        <h1>Book Issuance Form</h1>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="bookname">Book Name</label>
            <input type="text" id="bookname" name="bookname" required>

            <label for="issuedate">Issue Date</label>
            <input type="date" id="issuedate" name="issuedate" required>

            <label for="returndate">Return Date</label>
            <input type="date" id="returndate" name="returndate" required>

            <label for="charges">Charges</label>
            <input type="text" id="charges" name="charges" required>

            <button type="submit">Submit</button>
            <button type="button" class="cancel-btn">Cancel</button>
        </form>
    </div>

    <!-- <script>
       const container = document.querySelector('.issue-book-container');
        const issuelink = document.querySelector('.btn');
        const cancelBtn = document.querySelector('.cancel-btn');

        issuelink.addEventListener('click', () => {
            container.classList.add('active-popup-issue');
        });

        cancelBtn.addEventListener('click', () => {
            container.classList.remove('active-popup-issue');
        });
    </script> -->
</body>
</html>
