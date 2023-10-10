<?php
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = "localhost";
    $root = "root";
    $pwd = "";
    $database = "miniproject";
    $conn = mysqli_connect($username, $root, $pwd, $database);
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM `login` where `uname` = '$uname' AND `pwd` = '$pass'";
    $result = mysqli_query($conn, $sql);
    $exist = mysqli_num_rows($result);
    if ($exist == 1) {
      echo '<script> alert("Login Successful."); </script>';
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['uname'] = $uname;
      if ($uname == 'admin' && $pass == 'admin123') {
        header("location: admin_panel.php"); //this will redirect user from login to Home page
      } else {
        header("location: userpage.php");
      }
    } else {
      echo '<script> alert("Invalid Credentials."); </script>';
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking CSS File -->
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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
            <h2>Welcome to Login page</h2>
            <form method="post">
              <div class="user-box">
             
            <input type="text" name="uname" id="uname" required>
            <label for="uname">Username</label>
            
              </div>



              <div class="user-box">
              
            <input type="password" name="pass" id="pass" minlength="8" required>
            <label for="pass">Password</label>
            </div>

              <!-- <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
              </a> -->
              <button class="a" type="submit"><span></span>
                <span></span>
                <span></span>
                <span></span>Login</button>
              <p style="color:#ffff; margin-left: 48px;margin-top:20px;">Don't have an account with us ? <a href="signup.php" class="a" style="margin: top 10px;margin-top: 10px;margin-left: 30px; ">Click Here!</a></p>
            </form>
          </div>
</body>

</html>