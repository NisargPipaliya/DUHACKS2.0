<?php
session_start();
$showerror = false;
$showelert = false;
$amount=$desc=$edu=$designation="";
$_SESSION['promoter'] = false;
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include 'dbconnect.php';

        $ownername = $_SESSION['username'];
        $edu = $_POST['education'];
        $designation = $_POST['designation'];
        $productname = $_POST["productname"];
        $startupname = $_POST["startupname"];
        $amount = $_POST["amt"];
        $eq = $_POST["equity"];
        // $email = $_POST["email"];
        $mno = $_POST["phone"];
        $desc = $_POST["desc"];
        $gender = $_POST["flexRadioDefault"];
        // $_SESSION["user"] = $ownername;
        if(empty($ownername) || empty($productname) || empty($startupname))
        {
          $showerror = true;
          $showelert = "Please Fill All Required Fields";
        }
        else
        {
          $sql = "UPDATE `promoter` SET `productname` = '$productname', `startupname` = '$startupname', `amount` = '$amount', `equity` = '$eq', `mno` = '$mno', `desc` = '$desc', `gender` = '$gender' ,`education` = '$edu', `designation`= '$designation' WHERE `promoter`.`ownername` = '$ownername'";
          $suc = mysqli_query($conn,$sql);
          $_SESSION['promoter'] = true;
          header('location:home.php');  
        }

    }


?>

<html>
<head>
    <title>ULTRASOFT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg9gHHtUVXQAYdJmUJJH4qSt4laFtoVlOznUTrIq1E2nKetVk9-4RApH6YL0MCkoTa-B0&usqp=CAU">
<script src="https://kit.fontawesome.com/2707cc982f.js" crossorigin="anonymous"></script>
                        <!-- GOOGLE FONTSSS -->
                        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        .container-fluid{
            padding:3% 15%;
        }
        #quad{
      color:#0030ff;  
    }
    form{
      margin-top:2%;
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
            .fa-asterisk
            {
              color:red;
            }
            .form-check{
              display : inline-block;
            }
            .gender{
              margin : 1% 0%;
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
                <a class="nav-link hover-effect hover-effect"  href="">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-effect hover-effect" href="">Aboutus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-effect hover-effect" href="">FAQs</a>
            </li>
        </ul>
     </div>
    </nav>
            <!-- FORM STARTS -->

<form method="post" action="">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" name="education" class="form-control" />
        <label class="form-label" for="form6Example1">Education <i class="fa-duotone fa-asterisk"></i></label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" name="productname" class="form-control" />
        <label class="form-label" for="form6Example2">Product name <i class="fa-duotone fa-asterisk"></i></label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="startupname" class="form-control" />
    <label class="form-label" for="form6Example3">Startup name <i class="fa-duotone fa-asterisk"></i></label>
  </div>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example5" name="designation" class="form-control" />
    <label class="form-label" for="form6Example5">Designation <i class="fa-duotone fa-asterisk"></i></label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="tel" pattern="[0-9]{10}" id="form6Example6" name="phone" class="form-control" />
    <label class="form-label" for="form6Example6">Phone <i class="fa-duotone fa-asterisk"></i></label>
  </div>

    <!-- equity -->
    <div class="form-outline mb-4">
    <input type="number" min="1" max="50" id="form6Example6" name="equity" class="form-control" />
    <label class="form-label" for="form6Example6">Equity <i class="fa-duotone fa-asterisk"></i></label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" name="amt" class="form-control" />
    <label class="form-label" for="form6Example6">Amount-Required <i class="fa-duotone fa-asterisk"></i></label>
  </div>

  <div class="gender">
  <label class="form-label" for="form6Example4">Gender <i class="fa-duotone fa-asterisk"></i> : </label>
                        <!-- GENDER -->
                        <div class="form-check">
                       
  <input class="form-check-input" type="radio" value="1" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="0" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
</div>


  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" name="desc" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Description</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Become a promoter</button>
</form>

</div>
</body>
</html>