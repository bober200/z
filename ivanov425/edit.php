<?php
include 'connect.php';
session_start();

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>update</h1>
<form action="update.php" method="post" >
    <input type="hidden" name="id" value="<?= $product['id']?>">
    <p>Zagolovog</p>
    <input type="text" name="name" value="<?= $product['name']?>">
    <p>Desc</p>
    <textarea name="desc"><?= $product['desc']?></textarea>
    <p>price</p>
    <input type="number" name="price" value="<?= $product['price']?>">
    <button type="submit">Редактировать</button>
</form>
</body>
</html>