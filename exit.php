<?php
    session_start();
    $_SESSION["isauth"] = false;
    //print_r($_SESSION);
    header('Location: index.php');
?>