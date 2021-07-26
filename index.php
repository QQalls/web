<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Demis - Обратная связь</title>
    
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
            <h3>ОБРАТНАЯ СВЯЗЬ</h3>
        </div>
        <form class="auth_form">
            <p>ФИО</p>
            <input type="text" class="auth_input" name="name">
            <p>Адрес</p>
            <input type="text" class="auth_input" name="addres">
            <p>Телефон</p>
            <input id="tel" class="auth_input" name="phone">
            <p>Почта</p>
            <input type="email" class="auth_input" name="email">
            <button class="btn-auth">ОТПРАВИТЬ</button>
        </form>
    </div>
    </div>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/main.js"></script>
</body>
</html>