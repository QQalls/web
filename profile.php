<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Demis - Профиль пользователя</title>
    
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.demis.ru/local/templates/demis_edges/img/svg/Logo.svg">
        </div>
    <div class="block_auth">
        <div class="block_title">
            <h3>ДАННЫЕ</h3>
        </div>
        <div class="profile">
    <p><?=$_SESSION['user']['0'];?></p>
    <p><?=$_SESSION['user']['1'];?></p>
    <p><?=$_SESSION['user']['2'];?></p>
    <p><?=$_SESSION['user']['3'];?></p>
    <a href="/news.php">Новости</a>
        </div>
    </div>
    </div>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/main.js"></script>
</body>
</html>