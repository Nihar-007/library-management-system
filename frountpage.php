<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
    <div class="page0">
        <header class="haender">
            <a href="#" class="logo">LIBRARY</a>
            <nav class="navbar">
                <a href="#" class="active">Home</a>
                <a href="">About</a>
                <a href="">Services</a>
                <a href="">Contact</a>
            </nav>
        </header>
        <section class="home">
            <div class="home-contant">
            <form action="#" method="post" class="search-bar">
      <input type="text" name="search-query" placeholder="Search" />
      <button type="submit" class="search-btn">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="#fff"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
          />
        </svg>
      </button>
    </form>
                <h1> HI welcome to Library</h1>
                <h3> The House Of Book's</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ratione voluptatem in, eveniet, hic quibusdam provident, iure pariatur nisi eos et error aut? Reiciendis in corrupti qui!</p>
                <div class="bet-box">
                    <a href="signup.php">Sign-Up</a>
                    <a href="#">View Full Site</a>
                </div>
            </div>
            <div class="home-sic">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>

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
   
    background: rgba(0,0,0,.5);
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

/* .logo {
    position: relative;
    font-size: 25px;
    color: #ffff;
    text-decoration: none;
    font-weight: 600;
    z-index: 2;
    opacity: 0;
}

.logo::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,.5);
    
    animation: showRight 1s ease forwards;
    animation-delay: 0.4s;
} */
.logo {
    position: relative;
    font-size: 25px;
    color: #ffff;
    text-decoration: none;
    font-weight: 600;
    z-index: -2;
    
}

.logo::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,.5);
    
    animation: showRight 1s ease forwards;
    animation-delay: 0.4s;
}

@keyframes showRight {
    0% {
        opacity: 0;
        transform: translateX(100%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
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

.home {
    background:url("1.jpg") no-repeat ;
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
    background: #00adf0;
    border: 2px solid #00adf0;
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
    color: #00adf0;
}

.bet-box a:nth-child(2) {
    background: transparent;
    color: #ffffff;
}

.bet-box a:nth-child(2):hover {
    color: #081b29;
}

.bet-box a:nth-child(2)::before {
    background: #00adf0;
}

.bet-box a::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: #081b29;
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

    </style>

</body>

</html>