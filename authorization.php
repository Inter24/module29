
<?php
    include 'config.php';
    session_start();
    $_SESSION["CSRF"] = $token;
?>

<?php if ($_SESSION["isauth"]==1) {
    echo('<br><br><a href="cabinet.php">Войти в ЛК</a>');
} else {
?>
    <h2>Авторизация</h2>
    <form method="post" action="auth.php">
    <input type="text" name="login" placeholder="Логин"><br/>
    <input type="password" name="pass"> <br/>
    <input type="hidden" name="token" value="<?=$token?>"> <br/>
    <input type="submit" value="Войти">
    </form>
    <br><br>
    <a href="registration.php">Регистрация</a> |  <a href="vk.php">Войти через VK</a> 
<?php
    }
?>



