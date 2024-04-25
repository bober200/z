<?
include 'connect.php';
?>

<h1>add</h1>
<form action="add.php" method="post">
    <p>Zagolovog</p>
    <input type="text" name="name">
    <p>Desc</p>
    <textarea name="desc"></textarea>
    <p>price</p>
    <input type="number" name="price">
    <button type="submit"><a href="index.php">add</a></button>
</form>