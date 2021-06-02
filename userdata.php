<?php

include 'config.php';

$table = 'users'; //задаем имя таблицы в переменной
$sql = "SELECT*FROM ".$table." WHERE LOGIN = '".$_SESSION["username"]."'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$userdata=mysqli_fetch_assoc($result);

?>