<?
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'zxc');
if(!$connect){
    die('error');
}
else{
    // echo 'bd is ok';
}
if(!$connect -> set_charset("utf8")){
    echo 'bd is no ok';
}
?>