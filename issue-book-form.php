<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect("localhost", "root", "", "miniproject");

    $uname = $_POST['username'];
    $bname = $_POST['bookname'];
    $id = $_POST['issuedate'];
    $rd = $_POST['returndate'];
    $charges = $_POST['charges'];
    if(isset($_POST['submit'])){
        $sql = "INSERT into `issue_book` (`uname`,`b_name`,`issue_date`,`return_date`,`charges`) values ('$uname','$bname','$id','$rd','$charges')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: admin_panel.php");
        }
    }
    elseif(isset($_POST['cancel'])){
        header("location: admin_panel.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/issue_book.css">
    <title>Book Issuance Form</title>
</head>

<body>
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
            <input type="number" id="charges" name="charges" required>

            <button type="submit" name="submit">Submit</button>
            <button name="cancel" class="cancel-btn" formnovalidate>Cancel</button>
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
<!-- <script src="jquery-3.7.1.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
    $(document).ready(function(){
        $('#issuedate').datepicker({

            maxDate: "3D",
            minDate: "-0D" 
        });
    })
</script> -->
</html>