<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = "localhost";
    $root = "root";
    $pwd = "";
    $database = "miniproject";

    $conn = mysqli_connect($username, $root, $pwd, $database);

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    $exists_sql = "SELECT * FROM `login` WHERE `uname` = '$uname' ";
    $result = mysqli_query($conn, $exists_sql);
    $exists = mysqli_num_rows($result);
    if ($exists > 0) {
        echo '<script> alert("Username already exists. Please try another one."); </script>';
    } else {
        if ($pass == $cpass) {
            $sql = "INSERT INTO `login` (`fname`,`lname`,`uname`,`pwd`) values ('$fname','$lname','$uname','$pass')";
            $result = mysqli_query($conn, $sql);
            if($result){
              header("location: login.php");
            }
            // echo '<script> alert("Account Created."); </script>';
        } else {
            echo '<script> alert("Passwords dont match please try again."); </script>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking CSS File -->
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign-Up</title>
</head>

<body>
    <!-- <header>
        <p>Welcome to Sign-up page</p>
    </header>
    <main>
        <form method="POST">
            <label for="fname">First name</label>
            <input type="text" name="fname" id="fname" required><br><br>

            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" required><br><br>

            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" required><br><br>

            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" minlength="8" required><br><br>

            <label for="cpass">Confirm Password</label>
            <input type="password" name="cpass" id="cpass" minlength="8" required><br><br>

            <button type="submit">Sign-Up</button>
            <p>Already have an account with us ? <a href="login.php">Click Here!</a></p>
        </form>
    </main>
     -->
     <div class="login-box">
            <h2>Welcome to Sign-up page</h2>
            <form method="post">
              <div class="user-box">
              
            <input type="text" name="fname" id="fname" required>
            <label for="fname">First name</label>

              </div>
              <div class="user-box">
              
            <input type="text" name="lname" id="lname" required>
            <label for="lname">Last name</label>
            
              </div>
              
              <div class="user-box">
             
            <input type="text" name="uname" id="uname" required>
            <label for="uname">Username</label>
            
              </div>



              <div class="user-box">
              
            <input type="password" name="pass" id="pass" minlength="8" required>
            <label for="pass">Password</label>
              </div>


              <div class="user-box">
             
            <input type="password" name="cpass" id="cpass" minlength="8" required>
            <label for="cpass">Confirm Password</label>
              </div>



              <!-- <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
              </a> -->
              <button class="a" type="submit" name="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>Sign-Up</button>
              <p style="color:#ffff; margin-left: 48px;margin-top:20px;">Already have an account with us ? <a href="login.php" class="a" style="margin: top 10px;margin-top: 10px;margin-left: 30px; ">Click Here!</a></p>
            </form>
          </div>
</body>
</html>