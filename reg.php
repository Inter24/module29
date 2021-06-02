<?php

include 'config.php';
session_start();

if($_POST["token"] == $_SESSION["CSRF"])
{
    if((isset($_POST["login"]))&& (isset($_POST["pass"])))
    {
        $result = mysqli_query($link, "SELECT * FROM users WHERE LOGIN='". $_POST["login"]. "'");
        if(mysqli_num_rows($result) > 0)
        {
            echo('Логин занят');
        }
        else
        {          
            $hashedpass = md5($_POST["pass"]."SECRET");
            $sql = "INSERT INTO `users` (`LOGIN`, `PASSWORD`, `UGROUP`) VALUES ('".$_POST["login"]."', '".$hashedpass."', 'user')";
            $res = mysqli_query($link, $sql);
            if($res) {
                echo('Вы успешно зарегистрировались');
                echo('<br><br><a href="index.php">Войти</a>');
            }
        }
    }
} else {
    echo('не катит токен');
}

?>