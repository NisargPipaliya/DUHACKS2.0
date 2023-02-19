<?php
// session_start();
include 'dbconnect.php';

?>
<?php
session_start();
$showerror = false;
$showelert = false;
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];
    $cpwd = $_POST["cpwd"];
    $num=$_POST["phone"];
    $name=$_POST["name"];
    $dur=$_POST["duration"];
    $area=$_POST['area'];
    $cpm=$_POST["cpm"];


    $existsql="SELECT * FROM `login_d` WHERE `u_name` = '$uname'";
    $result = mysqli_query($conn,$existsql);
    $numrow = mysqli_num_rows($result);

    if($numrow > 0)
    {
        $showerror = true;
        echo "USERNAME ALREADY EXIST PLEASE LOGIN..";   
        header('location:signupgardener.php');
    }
    else
    {
        if($password == $cpassword)
        {
            // $sql = "INSERT INTO `garden_owners` (`GID`, `NAME`, `onumber`, `ODURATION`, `AREA`, `CHARGEPERMONTH`, `pwd`) VALUES (NULL, '$name', '$num','$dur','$area','$cpm','$pwd');";
                $sql="INSERT INTO `garden_owners`(`GID`, `NAME`, `onumber`, `ODURATION`, `AREA`, `CHARGEPERMONTH`, `pwd`) VALUES (NULL,'$name','$num','$dur','$area','$cpm','$pwd')";
                $sql2="INSERT INTO `login_d`(`u_name`, `p_wd`) VALUES ('$uname','$pwd')";

            $result = mysqli_query($conn,$sql2);
            $res2=mysqli_query($conn,$sql);
            if($result)
            {
                $showelert = true;
                $showelert = "DATA HAS BEEN SUCCESSFULLY INSERTED..";
            }
            header("location:signin.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarMart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<style>
    .main{
        margin-top:0rem;
        margin-bottom:10rem;
    }

    body {
        background: rgb(177, 228, 195);
    }

    @media (max-width:465px) {
        html {
            font-size: 0.8rem;
        }

        .wrapper {
            width: 80vw;
        }

    }

    .wrapper {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5rem;
        border-radius: 0.625rem;
        box-shadow: 5px 3px 6px #625d5d;
    }

    .registration_form {
        background: #0e3d24;
        padding: 25px;
        border-radius: 0.3125rem;
        width: 400px;
    }

    .registration_form .title h2 {
        text-align: center;
        font-size: 1.25rem;
        text-transform: uppercase;
        color: #fff;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.3125rem;
    }

    .form_wrap {
        margin-top: 35px;
    }

    .form_wrap .input_wrap {
        margin-bottom: 15px;
    }

    .form_wrap .input_wrap:last-child {
        margin-bottom: 0;
    }

    .form_wrap .input_wrap label {
        display: block;
        margin-bottom: 3px;
        color: white;

    }

    .form_wrap input[type="text"],
    [type="password"],[type="number"] {
        width: 100%;
        border-radius: 0.1875rem;
        border: 1px solid #9597a6;
        border-radius: 0.625px;
        padding: 10px;
        outline: none;
        background: linear-gradient(315deg, #56ffbe, #a1b0a5);
    }

    .form_wrap input[type="text"]:focus {
        border-color: #ebd0ce;
    }

    .form_wrap .input_radio:checked~span {
        background: #ebd0ce;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
      }
    
    .form_wrap .submit_btn {
        width: 100%;
        color: black;

        background: linear-gradient(315deg, #56ffbe, #a1b0a5);
        padding: 0.625rem;
        margin-top: 3%;
        border: 0;
        border-radius: 0.625rem;
        text-transform: uppercase;
        letter-spacing: 0.1875rem;
        cursor: pointer;
    }

    .form_wrap .submit_btn:hover {
        background: linear-gradient(315deg, #69d9cc, #199c4b);
    }
</style>

<body>

    <!-- <header></header>
 -->
 <?php include('header.php')?>


    <div class="main">
        <div class="wrapper">
            <div class="registration_form">
                <div class="title">
                    <h2> Sign Up</h2>
                </div>

                <form action="signupgardener.php" method="post">
                    <div class="form_wrap">
                        <div class="input_wrap">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                        </div>

                        <div class="input_wrap">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="uname">
                        </div>

                        <div class="input_wrap">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="pwd">
                        </div>
                        <div class="input_wrap">
                            <label for="password">Confirm Password</label>
                            <input type="password" id="cpassword" name="cpwd">
                        </div>




                        <div class="input_wrap">
                            <label for="phnumber">Phone Number</label>
                            <input type="number" name="phone" id="phnumber" min="1000000000" max="9999999999">
                        </div>
                        <div class="input_wrap">
                            <label for="duration">Duration (in months)</label>
                            <input type="number" name="duration"  min="1"  max="12">
                        </div>
                        <div class="input_wrap">
                            <label for="area">Area</label>
                            <input type="text" name="area">
                        </div>

                        <div class="input_wrap">
                            <label for="cpm">Charge per month</label>
                            <input type="number" name="cpm">
                        </div>

                        <div class="input_wrap">
                            <input type="submit" value="Register Now" class="submit_btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- <footer></footer>
 -->
 <?php include('footer.php')?>

 


</body>

</html>