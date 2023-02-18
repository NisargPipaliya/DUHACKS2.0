<?php
  session_start();
  
  ?>

<html>
    <head>
        <title>WEBSQUAD</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg9gHHtUVXQAYdJmUJJH4qSt4laFtoVlOznUTrIq1E2nKetVk9-4RApH6YL0MCkoTa-B0&usqp=CAU">
                            <!-- GOOGLE FONTSSS -->
                            <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
                            <link rel="stylesheet" href="style.css">
        <style>
             .container-fluid{
                padding: 3% 10%;
                padding-right: 21%;
            }
            .business{
                position: relative;
                bottom: -1%;
                right: 7%;
                height: 99%;
            }
            .navbar-brand{
                font-size: xx-large;
            }
            h1{
                font-family: 'Lobster';
                line-height: 71px;
                margin-top: 20%;
            }
            #quad{
                color:#0030ff;  
            }
            .btn-outline-light
            {
                background-color: #fbc0d0;
                border-color: rgb(44, 39, 39);
                margin: 6% 3%;
            }
            .btn-outline-light:hover
            {
                border-color: black;
                /* background-color: #fbc0d0; */
                /* border-color: rgb(44, 39, 39); */
            }
            .ic{
                height:12%;
                width:7%;
            } 
            .hover-effect::before{
              content:'';
              background-color:red;
              position: absolute;
              bottom:39%;
              height:2px;
              width:0;
              transition:width 0.25s ease-out;
            }
            .hover-effect:hover::before{
              content:'';
              position: absolute;
              background-color:red;
              height:2px;
              width:4%;
              right:auto;
              /* transition:width 0.25s ease-out; */
            }
        </style>
    </head>
    <body>
        <section id="title">
            <div class="container-fluid">
            <!-- NAV-BAR -->
          <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ULTRA<span id="quad">SOFT</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active hover-effect" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active hover-effect" aria-current="page" href="websquad/aboutus.php">Aboutus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hover-effect" aria-current="page" href="websquad/faq.php">FAQs</a>
          </li>

            <?php if($_SESSION['investor']){?>
          <li class="nav-item">
            <a class="nav-link active hover-effect" aria-current="page" href="table.php">See_Ideas</a>
          </li>
          <?php }?>






          <li class="nav-item">
            
          <a class="nav-link active hover-effect user" aria-current="page" href="<?php
                if(isset($_SESSION))
                {
                  if($_SESSION['loggedin']){
                  echo "profile.php";
                  }
                  else
                  {
                      echo "promoform.php";
                  }
                }
               
              ?>">
              <?php
                if(isset($_SESSION))
                {
                  if($_SESSION['loggedin']){
                  echo "Hello"."_".$_SESSION['username'];
                  }
                  else
                  {
                      echo "Login/Register";
                  }
                }
               
              ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hover-effect" aria-current="page" href="logout.php">
              <?php
              if(isset($_SESSION))
              {
                if($_SESSION['loggedin']){
                echo "logout";
                }
              }
              ?>
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>
          
          <div class="row">
            <div class="col-lg-6 col-md-12">
            <h1>The key is not about thinking of money, But investing it invest in next big thing from here!!!</h1>
           <a href="investor.php"> <button type="button" class="btn btn-outline-dark btn-lg"><i class="fa-brands fa-apple"></i><?php 
           
           if($_SESSION['investor'])
           {
            echo "Update Investing Details";
           }
           else 
           {
            echo "Be a investor";
           }
           
           ?></button></a>
           <a href="<?php
           if(isset($_SESSION))
           {
             if($_SESSION['loggedin']){
             echo "promoter.php";
             }
             else
             {
                 echo "promoform.php";
             }
           }
          
         ?>"> <button type="button" class="btn btn-outline-light btn-lg"><i class="fa-brands fa-google-play"></i><?php if($_SESSION['promoter'])
         {
          echo "Update Product";
         } 
         else
         {
            echo "Be a Promoter";
         }?></button></a>
            </div>
          <div class="col-lg-6 col-md-12">
            <img src="https://cdn.dribbble.com/users/3182781/screenshots/6974992/wykres-800x600.gif" class="business" alt="iphone-mockup">
          </div>
      </div>
      </div>
      
          </section>
    </body>
</html>