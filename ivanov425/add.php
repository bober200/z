<?php
include 'connect.php';

$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];


mysqli_query($connect, "INSERT INTO `product` (`id`, `name`, `desc`, `price`) VALUES (NULL, '$name', '$desc', '$price')");

?>