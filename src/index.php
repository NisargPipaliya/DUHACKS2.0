<?php
require "dbconnect.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarMart</title>  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
    .main {
        display: flex;
        justify-items: center;
        align-items: center;
        width: 60%;
        height: 20rem;
        margin: 10rem auto auto auto;
        text-align: center;
    
    }
    
</style>
<body>
    <header>
        <h1 class="logo">FarMart</h1>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="signin.html">Sign in</a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
    <main>

        <div class="main">
            <div class="card">
                <a href="#">
                    <img src="../images/veggies.avif" alt="mountains" style="width:100%">
                    <div class="containers">
                        <a class="category" href="#">Customers<a>
                                <h5><b> Buy Dairy Products Straight through our verified farms.</b></h5>

                                <p> <a class="login" href="#" style="padding-left: 0;">Sign In</a>
                                </p>

                    </div>
                </a>
            </div>

            <div class="card">
                <a href="#">
                    <img src="../images/farmer1.avif" alt="mountains" style="width:100%">
                    <div class="containers">
                        <a class="category" href="#">Farmers<a>
                                <h5><b>Sell your yield at a fair price and stop getting exploited.</b></h5>

                                <p> <a class="login" href="#">Sign In</a>
                                </p>
                    </div>
                </a>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <span class="logo_name" style="cursor:pointer; font-size:2rem"><b>FarMart</b></span>
            </div>
            <div class="media-icons">
              <a target="on_blank" href="#"><i class="fab fa-facebook"></i></a>
              <a target="on_blank" href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Links</li>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="signin.html">Sign in</a></li>
    
            </ul>
            <ul class="box">
              <li class="link_name">Countries</li>
              <li><a href="#">India</a></li>
              <li><a href="#">USA</a></li>
              <li><a href="#">Australia</a></li>
              <li><a href="#">Germany</a></li>
    
            </ul>
            <ul class="box">
              <li class="link_name">Legal Info</li>
              <li><a href="#">Licence</a></li>
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">Privacy Policies</a></li>
    
            </ul>
            <ul class="box">
              <li class="link_name">Contact</li>
              <li><a target="on_blank" href="tel:+9170XXXXXXXX">+91 70XXXXXXXX</a></li>
              <li><a target="on_blank" href="mailto:'farmart@gmail.com'">farmart@gmail.com</a></li>
            </ul>
          </div>
        </div>

        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 <a href="#">FarMart</a></span>
          </div>
        </div>
      </footer>
    <script src="script.js"></script>
</body>

</html>