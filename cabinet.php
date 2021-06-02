<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

    if($_SESSION["isauth"]==true) {
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" media="all" href="css/main.css" />
      <title>LK</title>
</head>
<body>
    <h1>Вы вошли в личный кабинет</h1>
    <?php 
    include 'userdata.php'; 
    ?>
    <br>
    <a href="exit.php">Выход</a>
    <br> 

    <p>Сделать страницу, на которую нельзя попасть, пока пользователь не авторизован. На этой странице необходимо отобразить один абзац текста и одну картинку. <br> 
    Текст должен быть виден всем авторизованным пользователям, картинка — только пользователям с ролью  «пользователь VK»</p>

    <?php 
    if($userdata['UGROUP'] == 'vkuser') {
    ?>
        <img src="images/img.jpg">
    <?php 
    }
    ?>

</body>
</html>
<?php 
    } else {
        header('Location: index.php');
    }
?>


