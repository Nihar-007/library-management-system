<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="page0">
        <header class="haender">
            <a href="#" class="logo">LIBRARY</a>
            <nav class="navbar">
                <a href="" class="active">Home</a>
                <a href="about_us.php"> About</a>
                <!-- <a href="">Services</a> -->
                <a href="contact_us.php">Contact</a>
            </nav>
        </header>
        <section class="home">
            <div class="home-contant">
                <form method="post" class="search-bar">
                    <input type="text" name="searchbook" placeholder="Search" id="searchQuery" autocomplete="off" />
                    <button type="submit" class="search-btn" id="btn-search">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" stroke-width="1.5" stroke="#fff" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>

                </form>
                <!-- modal for search -->
                <div id="modal">
                    <div id="modal-form">
                        <h2 id="search">Search</h2>
                        <hr>
                        <div id="open"></div>
                        <div class="close-btn close">&times;</div>
                    </div>
                </div>
                <!-- modal close -->
                <h1> HI welcome to Library</h1>
                <h3> The House Of Book's</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ratione voluptatem in, eveniet, hic quibusdam provident, iure pariatur nisi eos et error aut? Reiciendis in corrupti qui!</p>
                <div class="bet-box">
                    <a href="login.php">LOGIN</a>
                    <a href="signup.php">SIGN UP</a>
                </div>
            </div>


        </section>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        body {
            color: #ededed;
        }

        header {
            /* background-color:lightblue;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */

            background: rgba(0, 0, 0, .5);
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 50;
        }


        .logo {
            position: relative;
            font-size: 25px;
            color: #ffff;
            text-decoration: none;
            font-weight: 600;
            z-index: -2;

        }



        .navbar a {
            font-size: 18px;
            text-decoration: none;
            color: #ffffff;
            font-weight: 500;
            margin-left: 35px;
            transition: 0.3s;
        }

        .navbar a:hover,
        .navbar a.active {
            color: #00adf0;
        }

        #modal {
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            z-index: 100;
            display: none;
            overflow: scroll;
        }

        #modal-form {
            /* overflow: scroll; */
            background: #fff;
            position: relative;
            width: 30%;
            top: 20%;
            left: calc(50% - 15%);
            padding: 15px;
            border-radius: 4px;
            color: black;
        }

        .close-btn {
            background-color: red;
            color: white;
            height: 30px;
            width: 30px;
            font-size: 25px;
            line-height: 30px;
            position: absolute;
            /* border-radius: 50%; */
            text-align: center;
            cursor: pointer;
            top: 0px;
            right: 0px;
        }

        .close-btn:hover {
            background-color: #c9184a;
        }

        .slider-item img {
            width: 120px;
            height: 200px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .home {
            background: url("images/1.jpg") no-repeat;
            /* height: 100%; */
            height: 100vh;
            background-position: center;
            background-size: cover;

            /* background-size: cover;
    background-position: center; */
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 10%;
            z-index: -2;
        }

        .home-contant {
            margin-top: 120px;
            max-width: 600px;
        }

        .home-contant h1 {
            font-size: 56px;
            font-weight: 700;
            line-height: 1.2;
        }

        .home-contant h3 {
            font-size: 32px;
            font-weight: 700;
            color: #ffffff;
        }

        .home-contant p {
            font-size: 16px;
            margin: 20px 0 40px;
        }

        .home-contant .bet-box {
            display: flex;
            justify-content: space-between;
            width: 345px;
            height: 50px;
        }

        .bet-box a {
            position: relative;
            justify-content: center;
            align-items: center;
            display: inline-flex;
            width: 150px;
            height: 100%;
            background: #958993;
            border: 2px solid #ffff;
            border-radius: 8px;
            font-size: 19px;
            text-decoration: none;
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 1px;
            z-index: 1;
            overflow: hidden;
            transition: 0.5s;
        }

        .bet-box a:hover {
            color: #081b29;
        }

        .bet-box a:nth-child(2) {
            background: transparent;
            color: #ffffff;
        }

        .bet-box a:nth-child(2):hover {
            color: #081b29;
        }

        .bet-box a:nth-child(2)::before {
            background: #b8c2d1;
        }

        .bet-box a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: #b8c2d1;
            z-index: -1;
            transition: 0.5s;
        }

        .bet-box a:hover:before {
            width: 100%;
        }

        .home-sic {
            position: absolute;
            bottom: 25px;
            width: 170px;
            display: flex;
            justify-content: space-between;
        }

        .home-sic a {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 2px solid #00adf0;
            border-radius: 50%;
            font-size: 20px;
            color: #ffffff;
            text-decoration: none;
            z-index: 1;
            overflow: hidden;
            transition: 0.5s;
        }

        .home-sic a:hover {
            color: #081b29;
        }

        .home-sic a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: #00adf0;
            z-index: -1;
            transition: 0.5s;
        }

        .home-sic a:hover::before {
            width: 100%;
        }

        @keyframes showRight {
            100% {
                width: 0;
            }
        }


        /* search bar    */

        .search-bar {

            display: grid;
            align-items: center;
            background-color: rgba(149, 190, 251, 0.5);
            border-radius: 6rem;
            max-width: 80rem;
            grid-template-columns: 1fr 3rem;
        }

        .search-bar input {
            margin-left: 20px;

            font-size: 2rem;

            outline: 0;
            border: 0;
            background-color: transparent;
            color: #fff;
        }

        /* .search-bar{
    background: transparent;

} */
        .search-bar input::placeholder {
            color: #b8c2d1;
        }

        .search-btn {
            background-color: transparent;
            border: 0;
            padding: 0;
            height: 3rem;
            width: 3rem;
            display: grid;
            place-items: center;
        }

        @media screen and (max-width: 350px) {
            .search-btn {
                display: none;
            }
        }


        /* Your existing styles */

        .autocom-box {
            position: absolute;
            margin-top: 250px;
            width: 40%;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 4px 4px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: white;
            z-index: 2;
        }

        .autocomplete-item {
            display: flex;
            color: #081b29;
            align-items: center;
            padding: 8px;
            cursor: pointer;
        }

        .small-image {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .autocomplete-item:hover {
            background-color: #f2f2f2;
        }
    </style>

</body>
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

</html>