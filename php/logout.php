<?php
    session_start();
    // session_unset();
    $_SESSION['loggedin']=false;
    $_SESSION['promoter'] = false;
    $_SESSION['investor'] = false;


    header("location:promoform.php");
?>