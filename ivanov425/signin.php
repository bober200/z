<?
include ('connect.php');
session_start();
$login=$_POST['login'];
$password= md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password`= '$password' ");
if( mysqli_num_rows($check_user) >0 ){

    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user']=[
        "id"=> $user['id'],
        "name"=> $user ['name'],
        "login"=> $user ['login']
    ];
    header('Location: ../profile.php');
}else{
        $_SESSION['z'] = 'не верный логин или пароль';
        header('Location: ../reg.php');
        exit; // Важно добавить выход, чтобы код ниже не выполнялся
    
}
?>