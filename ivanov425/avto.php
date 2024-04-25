<?
include ('connect.php');

session_start();

if($_SESSION['user']){
    header('Location: ../profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <form action="signin.php" method="post">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="пароль">
        <button><a href="profile.php">Войти</a></button>
        <a href="reg.php">Регистрация</a>
    </form>
    <p class="msg"><?
        echo  $_SESSION['z'];
        unset($_SESSION['z']);
        ?></p>
</body>
</html>