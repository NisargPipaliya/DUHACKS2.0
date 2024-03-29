<?php
// session_start();
$login = false;
$showerror = false;
// $_SESSION['loggedin'] = false;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    echo `${username} ${password}`;

    $sql = "SELECT * FROM `login_d` WHERE u_name='$username' AND p_wd='$password'";
    $result = mysqli_query($conn,$sql);
    

    $numrow = mysqli_num_rows($result);

    if($numrow == 1)
    {
        $login = true;
        session_start();

        $_SESSION['username'] = $username;
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM login_d WHERE u_name = '$user'";
        $result = mysqli_query($conn,$sql);
        $check=mysqli_fetch_assoc($result);
        $_SESSION['loggedin'] = true;
        if($username=='admin' && $password=='admin')
            $_SESSION['adminl']=true;
      
        header("location: index.php");
    }
    else
    {
        $showerror = "username and password does not match";
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
    .form {
        position: relative;
        background: #0c3e23;
        border: 1px solid #000;
        width: 21.875rem;
        padding: 40px 40px 60px;
        border-radius: 10px;
        text-align: center;
    }
    .main{
        display: grid;
        margin: 6rem auto auto;
    }

    .form::before {
        content: '';
        position: absolute;
        top: -2px;
        right: -2px;
        bottom: -2px;
        left: -2px;
        background: linear-gradient(315deg, #1ee973, #309276);
        z-index: -1;
        transform: skew(2deg, 1deg);
        border-radius: 10px;
    }

    .form h2 {
        color: #fff;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 5px;
    }

    .form .input {
        margin-top: 2.5rem;
        text-align: left;
    }

    .form .input .inputBox {
        margin-top: 10px;
    }

    .form .input .inputBox label {
        display: block;
        color: #fff;
        margin-bottom: 5px;
        font-size: 1.125rem;
        letter-spacing: 1px;
    }

    .form .input .inputBox input {
        position: relative;
        width: 100%;
        height: 2.5rem;
        border: none;
        outline: none;
        padding: 0.3125rem 1rem;
        background: linear-gradient(315deg, #56ffbe, #a1b0a5);
        color: #000;
        font-size: 1rem;
        border-radius: 0.625rem;
    }

    .form .input .inputBox input[type="submit"] {
        cursor: pointer;
        margin-top: 1.15rem;
        letter-spacing: 1px;
    }

    .form .input .inputBox input[type="submit"]:hover {
        background: linear-gradient(315deg, #69d9cc, #199c4b);
    }

    .form .input .inputBox input[type="submit"]:active {
        color: rgba(255, 255, 255, 0.521);
        background: linear-gradient(315deg, #1ee98471, #3f7fc88c);
    }

    .forgot {
        margin-top: 10%;
        color: #fff;
        font-size: 0.875rem;
        letter-spacing: 1px;

    }

    .forgot a {
        color: rgb(177, 228, 195);
    }
    @media (max-width:750px) {
        html{
            font-size: 0.7rem;
        }
        .main{
           display: grid;
           justify-content: center;
        }
    }
    @media (max-width:490px) {
        html{
            font-size: 0.7rem;
        }
    }
    main{
        min-height:0px;
        
    }
</style>

<body>
    <main>
        <header>
            <h1 class="logo">FarMart</h1>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="signin.php">Sign in</a></li>
                </ul>
            </nav>
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
        </header>

        
        
    </main>

    <div class="main">
        <form action="signin.php" method="post"> 
        <div class="form">
            <h2>Signin</h2>
            <div class="input">
                <div class="inputBox">
                    <label for="">Username</label>
                    <input type="text" name="username" >
                </div>
                <div class="inputBox">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="Sign In"> 
                </div>
            </div>
            <p class="forgot">Not Registered Yet? <a href="#">Click Here</a></p>
            
        </div>
</form>
    </div>

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
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signin.php">Sign in</a></li>
    
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