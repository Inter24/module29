<?php

include 'config.php';
include 'logger.php';
session_start();

if($_POST["token"] == $_SESSION["CSRF"])
{
    if((isset($_POST["login"]))&& (isset($_POST["pass"])))
    {

        $hashedpass = md5($_POST["pass"]."SECRET");

        $result = mysqli_query($link, "SELECT * FROM users WHERE LOGIN='". $_POST["login"]. "' AND PASSWORD='". $hashedpass . "'");

        if(mysqli_num_rows($result) >0)
        {
            // логин и пароль нашли
            $_SESSION["isauth"] = true;
            $_SESSION["username"] = $_POST["login"];
            echo('Вы вошли в систему');
            header('Location: cabinet.php');
        }
        else
        {
            //Отображаем сообщение, что логин и пароль не найдены
            echo('Логин или пароль не найдены');
            $log = date('Y-m-d H:i:s') . ' Логин или пароль не найдены';
            file_put_contents(__DIR__ . $logfile, $log . PHP_EOL, FILE_APPEND);
        }

    } else {
        $log = date('Y-m-d H:i:s') . ' Не задан логин или пароль';
        file_put_contents(__DIR__ . $logfile, $log . PHP_EOL, FILE_APPEND);
    }
} else {
    echo('не катит токен');
    $log = date('Y-m-d H:i:s') . ' Кривой токен на авторизации';
    file_put_contents(__DIR__ . $logfile, $log . PHP_EOL, FILE_APPEND);
}

?>