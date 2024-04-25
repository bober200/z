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
    <h2>Название<?= $product['name']?></h2>
    <h2>Цена:<?= $product['price']?></h2> 
     <h2>описание:<?= $product['desc']?></h2>
</body>
</html>