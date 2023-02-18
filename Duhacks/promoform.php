
<?php
$login = false;
$showerror = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql = "SELECT * FROM `promoter` WHERE ownername='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    

    $numrow = mysqli_num_rows($result);

    if($numrow == 1)
    {
        $login = true;
        session_start();

        $_SESSION['username'] = $username;
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM promoter WHERE ownername = '$user'";
        $result = mysqli_query($conn,$sql);
        $check=mysqli_fetch_assoc($result);
        $_SESSION['loggedin'] = true;
        $_SESSION['promoter'] = false;
        $_SESSION['investor'] = false;

        if($check["equity"] != NULL)
        {
          $_SESSION['promoter'] = true;
        }
        else if($check['education'] != NULL)
        {
          $_SESSION['investor'] = true;
        }

        
        header("location: home.php");
    }
    else
    {
        $showerror = "username and password does not match";
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
                        <!-- GOOGLE FONTSSS -->
                        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
                        <!-- <link rel="stylesheet" href="style.css"> -->
</head>
  <style>
    #quad{
      color:#0030ff;  
    }
    .container-fluid{
      padding: 3% 15%;
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
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method="post" action="">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="username" type="text" id="form1Example13" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example13">Username</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                </div>
      
      
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
               <a href="register.php"> <button type="button" class="btn btn-primary btn-lg btn-block">Sign up</button></a>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
      
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                  role="button">
                  <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
      
              </form>
            </div>
          </div>
        </div>
      </section>

</body>
</html>