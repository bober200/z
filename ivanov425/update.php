<?php
include 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `product` SET `name` = '$name', `desc` = '$desc', `price` = '$price' WHERE `product`.`id` = '$id'");

header('Location: /');
?>