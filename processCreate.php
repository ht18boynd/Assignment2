<?php
session_start();
include('db.php');
$name= $_POST['name'];
$author=$_POST['author'];
$price=$_POST['price'];
insertDb($name ,$author ,$price);
header('location:viewBook.php');

?>