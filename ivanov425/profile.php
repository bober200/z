<?
include ('connect.php');

session_start();

if($_SESSION['user']){
    header('Location: ../index.php');
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
    <form>
      <h2><?=$_SESSION['user'] ['name']?></h2>  
      <h2><?=$_SESSION['user'] ['login']?></h2> 
      <a href="logout.php" class="logout">Выход</a>
    </form>
</body>
</html>