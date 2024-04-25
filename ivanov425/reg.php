<?php 
include ('connect.php');
session_start();
// if($_SESSION['user']){
//     header('Location: ../profile.php');
//     exit;
// }
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="signup.php" method="post">
    <label for="">Имя</label>
    <input type="text" name="name" placeholder="Имя">
    <label for="">Логин</label>
    <input type="email" name="login" placeholder="Логин">
    <label for="">Пароль</label>
    <input type="password" name="password" placeholder="Пароль">
    <label for="">Повторите пароль</label>
    <input type="password" name="password_con" placeholder="Повторите пароль">
    <button type="submit">Зарегистрироваться</button>
    <a href="avto.php">Вход</a>
    <p class="msg">
    <!-- <?php 
    echo  $_SESSION['z']; 
    unset($_SESSION['z']); 
    ?> -->
    </p>
</form>
</body>
</html>
