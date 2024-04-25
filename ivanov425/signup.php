<?php
include ('connect.php');
session_start();

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_con = $_POST['password_con'];

if ($password === $password_con) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$hashed_password')";
    mysqli_query($connect, $query);

    $_SESSION['z'] = 'Вы зарегистрировались';
    header('Location: ../avto.php');

} else {
    $_SESSION['z'] = 'Пароли не совпадают';
    header('Location: ../reg.php');

}
?>