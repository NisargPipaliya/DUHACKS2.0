<?php
$showerror = false;
$showelert = false;
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include 'dbconnect.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $email = $_POST["email"];

        $existsql="SELECT * FROM `promoter` WHERE ownername = '$username'";
        $result = mysqli_query($conn,$existsql);
        $numrow = mysqli_num_rows($result);

        if($numrow > 0)
        {
            $showerror = true;
            $showerror = "USERNAME ALREADY EXIST PLEASE LOGIN..";
            header('location:promoform.php');
        }
        else if(empty($username) || empty($password) || empty($cpassword))
        {
          $showerror = true;
          $showelert = "Please fill all form fields";
        }
        else
        {
            if($password == $cpassword)
            {
                $sql = "INSERT INTO `promoter` (`id`, `ownername`, `productname`, `startupname`, `amount`, `equity`, `email`, `password`, `mno`, `desc`, `gender`) VALUES (NULL, '$username', NULL, NULL, NULL, NULL, '$email', '$password', NULL, NULL, NULL);";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    $showelert = true;
                    $showelert = "DATA HAS BEEN SUCCESSFULLY INSERTED..";
                }
                header("location:promoform.php");
            }
            else{
                $showerror = true;
                $showerror = "Please enter same passwords..";
            }
        }
    }
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg9gHHtUVXQAYdJmUJJH4qSt4laFtoVlOznUTrIq1E2nKetVk9-4RApH6YL0MCkoTa-B0&usqp=CAU">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2707cc982f.js" crossorigin="anonymous"></script>
                            <!-- GOOGLE FONTSSS -->
                            <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
                            <style>
                                #quad{
                                  color:#0030ff;  
                                }
                                .container-fluid{
                                  padding: 3% 15%;
                                  background-color: #eeee;
                                }
                                .hover-effect::before{
              content:'';
              background-color:red;
              position: absolute;
              bottom:29%;
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
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="home.php"><span>ULTRA</span><span id="quad">SOFT</span></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link hover-effect" href="">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link hover-effect" href="">Aboutus</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link hover-effect" href="">FAQs</a>
                  </li>
              </ul>
           </div>
          </nav>
          </div>

          <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-c  enter align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
          
                          <form class="mx-1 mx-md-4" method="post" action="">
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input name="username" type="text" id="form3Example1c" class="form-control" />
                                <label class="form-label" for="form3Example1c">Your Name</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" name="email" id="form3Example3c" class="form-control" />
                                <label class="form-label" for="form3Example3c">Your Email</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input name="password" type="password" id="form3Example4c" class="form-control" />
                                <label class="form-label" for="form3Example4c">Password</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input name="cpassword" type="password" id="form3Example4cd" class="form-control" />
                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                              </div>
                            </div>
          
                            <div class="form-check d-flex justify-content-center mb-5">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                              <label class="form-check-label" for="form2Example3">
                                I agree all statements in <a href="#!">Terms of service</a>
                              </label>
                            </div>
          
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
          
                          </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
          
                          <img src="draw1.webp"
                            class="img-fluid" alt="Sample image">
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    </body>
</html>