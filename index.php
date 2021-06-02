<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" media="all" href="css/main.css" />
      <title>AUTH</title>
</head>
<body>
    <h1>Главная</h1>
    <?php 
    include 'authorization.php'; 
    ?>    
</body>
</html>


