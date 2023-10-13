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
  <link rel="stylesheet" href="css/admin_panel.css">
  <script src="jquery-3.7.1.min.js"></script>
  <title>Library management system</title>
</head>

<body>
  <div class="bg"></div>
  <header>
    <div class="mynavbar">

      <div class="logo">
        <img src="images/libaray_logo1.png" alt="LIBRARY" srcset>
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
          <li><a href="contact_us.php">CONTACT US</a></li>
          <li><a href="book-request-form.php">REQUEST'S</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
      <div class="nav-right">
        <form action="#" method="post" class="search-bar">
          <input type="text" name="search-query" id="searchQuery" placeholder="Search" />
          <div class="autocom-box" id="autocomplete"></div>
          <button type="submit" class="search-btn">
            <i class="fa-solid fa-search"></i>
          </button>
        </form>
        <!-- modal for search -->
        <div id="modal">
          <div id="modal-form">
            <h2>Search</h2>
            <hr>
            <div id="open"></div>
            <div class="close-btn close">&times;</div>
          </div>
        </div>
        <!-- modal close -->
      </div>
    </div>
  </header>

  <aside>
    <div class="wrapper">
      <div class="sidebar">
        <div class="logo2">
          <img src="images/libaray_logo1.png" alt="logo">
          <h2>libarary</h2>
        </div>
        <ul class="links">
          <h4>Category of book's</h4>
          <li><a href="#m">Motivation</a></li>
          <li><a href="#ac">ACTION</a></li>
          <li><a href="#f">FANTASY</a></li>
          <li><a href="#h">HORROR</a></li>
          <li><a href="#n">SELF-HELP</a></li>
          <li><a href="#a">ANIMES</a></li>
          <hr>
        </ul>
      </div>

      <!-- books coding start -->

      <!-- <div class="info">
        <div id="slider-container"> -->
      <div class="info">
        <!-- First book self -->
        <div id="slider-container">
          <h1 id="m">MOTIVATION</h1>
          <button id="prev-btn" onclick="prevSlide('motivation')"> &lt; </button>
          <button id="next-btn" onclick="nextSlide('motivation')"> &gt; </button>
          <div class="books">

            <div id="motivation-slider" class="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'MOTIVATION' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/$bimg' alt='$bname'></a>
                      <p>" . $row['b_name'] . "</p></div>";
                // echo "<div>".$row['b_name']."</div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- Second book self -->

        <div id="slider-container">
          <h1 id="ac">ACTION & ADVENTURE</h1>
          <button id="prev-btn" onclick="prevSlide('action')"> &lt; </button>
          <button id="next-btn" onclick="nextSlide('action')"> &gt; </button>
          <div class="books">

            <div id="action-slider" class="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'action' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>
        <!-- Third book self -->

        <div id="slider-container">
          <h1 id="f">FANTASY</h1>
          <button id="prev-btn" onclick="prevSlide('fantasy')"> &lt; </button>
          <button id="next-btn" onclick="nextSlide('fantasy')"> &gt; </button>
          <div class="books">

            <div id="fantasy-slider" class="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'FANTASY' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- fourth book self -->

        <div id="slider-container">
          <h1 id="h">HORROR</h1>
          <button id="prev-btn" onclick="prevSlide('horror')"> &lt; </button>
          <button id="next-btn" onclick="nextSlide('horror')"> &gt; </button>
          <div class="books">

            <div id="horror-slider" class="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'horror' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- fivth book self -->


        <div id="slider-container">
          <h1 id="n">SELF-HELP</h1>
          <button id="prev-btn" onclick="prevSlide('novels')"> &lt; </button>
          <button id="next-btn" onclick="nextSlide('novels')"> &gt; </button>
          <div class="books">

            <div id="novels-slider" class="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'self-help' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <!-- sixth book self -->

        <div id="slider-container">
          <h1 id="a">ANIMES</h1>
          <button id="prev-btn" onclick="prevSlide('animes')"> &lt; </button>
          <button id="next-btn" onclick="nextSlide('animes')"> &gt; </button>
          <div class="books">

            <div id="animes-slider" class="slider-wrapper">

              <?php
              $sql = "SELECT * from `add_book` where `b_category` = 'anime' ";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $bname = $row['b_name'];
                $bimg = $row['b_image'];
                echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/$bimg' alt='$bname'></a>
                <p>" . $row['b_name'] . "</p></div>";
              }
              ?>
            </div>
          </div>
        </div>

        <script>
          // Your JavaScript code for slider functionality
          const sliderIndex = {};

          function initSlider(category) {
            sliderIndex[category] = 0;
            showSlide(category);
          }

          function showSlide(category) {
            const sliderItems = document.querySelectorAll(`#${category}-slider .slider-item`);
            if (sliderIndex[category] >= sliderItems.length) {
              sliderIndex[category] = 0;
            }
            if (sliderIndex[category] < 0) {
              sliderIndex[category] = sliderItems.length - 1;
            }
            for (let i = 0; i < sliderItems.length; i++) {
              sliderItems[i].style.transform = `translateX(calc(-${sliderIndex[category]} * (100% + 20px)))`;
            }
          }

          function nextSlide(category) {
            sliderIndex[category]++;
            showSlide(category);
          }

          function prevSlide(category) {
            sliderIndex[category]--;
            showSlide(category);
          }

          // Initialize sliders for each category
          initSlider('motivation');
          initSlider('action');
          initSlider('fantasy');
          initSlider('horror');
          initSlider('novels');
          initSlider('animes');
        </script>
        <script>
          $(document).ready(function() {

            $('#searchQuery').on('keyup', function() {
              $('#modal').show();
              var search = $(this).val();
              $.ajax({
                url: 'search_ajax.php',
                method: 'POST',
                data: {
                  search: search
                },
                success: function(data) {
                  $('#open').html(data);
                }
              });
            });

            $('body').on('click', function() {
              $('#modal').hide();
            });

            $(document).on('click', '.close-btn', function() {
              $('#modal').hide();
            });

          });
        </script>


      </div>
    </div>
  </aside>
  <script src="pop-up-form1.js"></script>
</body>

</html>