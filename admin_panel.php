<?php
$conn = mysqli_connect("localhost", "root", "", "miniproject");
// $sql = "SELECT * from `add_book`";
// $result = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($result);
session_start();
if ($_SESSION['login'] != true) {
  header("location : login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="addmin.css">
  <title>Library management system</title>

</head>

<body>
  <header>
    <div class="mynavbar">

      <div class="logo">
        <img src="libaray_logo1.png" alt="LIBRARY" srcset>
        <ul>
          <li>
            <h1>LIBRARY</h1>
          </li>
          <li>
            <h2>house of books</h2>
          </li>
        </ul>
      </div>
      <div class="nav1">
        <ul id="nav">
          <li><a href="#">HOME</a></li>
          <li><a href="about_us.php">ABOUT US</a></li>
          <li><a href="contact_us.php">CONTACT</a></li>
          <li><a href="#">REQUEST'S</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>

      <div class="nav-right">
        <!-- <div> -->
        <form action="#" method="post" class="search-bar">
          <input type="text" name="search-query" placeholder="Search" />
          <button type="submit" class="search-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40" stroke-width="2" stroke="black" class="w-4 h-4" color="black">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </button>
        </form>
        <div class="nav-icon">
          <button style="height: 18px; border: 0px;"><i class="fa-solid fa-bars fa-2xl"></i></button>
        </div>
        <!-- </div> -->
      </div>

    </div>

  </header>
  <aside>
    <div class="wrapper">


      <div class="sidebar">
        <div class="logo2">
          <img src="libaray_logo1.png" alt="logo" class="default">
          <h2>library</h2>
        </div>
        <ul class="links">
          <h4>Main Menu</h4>
          <li><a href="#">ISSUE</a></li>
          <!-- <li><a href="#">RENEW</a></li> -->
          <li><a href="#">RETURN</a></li>
          <li><a href="add_book.php">ADD BOOKS</a></li>
          <li><a href="remove_book.php">REMOVE BOOKS</a></li>
          <li><a href="admin.php">USER DATABASE</a></li>
          <hr>

        </ul>
      </div>

      <!-- books coding start -->

      <div class="info">
        <!-- First book self -->
        <div id="slider-container">
          <h1>MOTIVATION</h1>
          <button id="prev-btn" onclick="prevSlide()"> &lt; </button>
          <button id="next-btn" onclick="nextSlide()"> &gt; </button>
          <div class="books">

            <div id="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'MOTIVATION' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href=''><img src='images/$bimg' alt='$bname'></a>
                      <p>" . $row['b_name'] . "</p></div>";
                // echo "<div>".$row['b_name']."</div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- Second book self -->

        <div id="slider-container">
          <h1>ACTION & ADVENTURE</h1>
          <button id="prev-btn" onclick="prevSlide()"> &lt; </button>
          <button id="next-btn" onclick="nextSlide()"> &gt; </button>
          <div class="books">

            <div id="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book`";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href=''><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>
        <!-- Third book self -->

        <div id="slider-container">
          <h1>FANTASY</h1>
          <button id="prev-btn" onclick="prevSlide()"> &lt; </button>
          <button id="next-btn" onclick="nextSlide()"> &gt; </button>
          <div class="books">

            <div id="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'FANTASY' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href=''><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- fourth book self -->

        <div id="slider-container">
          <h1>HORROR</h1>
          <button id="prev-btn" onclick="prevSlide()"> &lt; </button>
          <button id="next-btn" onclick="nextSlide()"> &gt; </button>
          <div class="books">

            <div id="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book`";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href=''><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- fivth book self -->


        <div id="slider-container">
          <h1>NOVELS</h1>
          <button id="prev-btn" onclick="prevSlide()"> &lt; </button>
          <button id="next-btn" onclick="nextSlide()"> &gt; </button>
          <div class="books">

            <div id="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book`";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href=''><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- sixth book self -->

        <div id="slider-container">
          <h1>ANIMES</h1>
          <button id="prev-btn" onclick="prevSlide()"> &lt; </button>
          <button id="next-btn" onclick="nextSlide()"> &gt; </button>
          <div class="books">

            <div id="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book`";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href=''><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <script>
          const sliderWrapper = document.getElementById('slider-wrapper');
          const prevBtn = document.getElementById('prev-btn');
          const nextBtn = document.getElementById('next-btn');

          let currentPosition = 0;
          const slideWidth = 220; // Adjust this based on your slider item width and margin
          const totalSlides = document.querySelectorAll('.slider-item').length;
          const visibleSlides = 4; // Adjust this based on how many slides you want to show at a time

          function nextSlide() {
            currentPosition -= slideWidth;
            if (currentPosition < -(slideWidth * (totalSlides - visibleSlides))) {
              currentPosition = 0;
            }
            updatePosition();
          }

          function prevSlide() {
            currentPosition += slideWidth;
            if (currentPosition > 0) {
              currentPosition = 0;
            } else if (currentPosition < -(slideWidth * (totalSlides - visibleSlides))) {
              currentPosition = -(slideWidth * (totalSlides - visibleSlides));
            }
            updatePosition();
          }

          function updatePosition() {
            sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
          }
        </script>


      </div>
    </div>
  </aside>
</body>

</html>