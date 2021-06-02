
<?php
    include 'config.php';
    session_start();
    $_SESSION["CSRF"] = $token;
?>

<h1>Регистрация</h1>

<form method="post" action="reg.php">
<input type="text" name="login" placeholder="Логин"><br/>
<input type="password" name="pass"> <br/>
<input type="hidden" name="token" value="<?=$token?>"> <br/>
<input type="submit" value="Регистрация">
</form>
<br>
<a href="index.php">На главную</a>  |  <a href="vk.php">Войти через VK</a> 


