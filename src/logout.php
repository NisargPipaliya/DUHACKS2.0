<?php
    session_start();
    // session_unset();
    $_SESSION['loggedin']=false;
    header("location:index.php");
?>