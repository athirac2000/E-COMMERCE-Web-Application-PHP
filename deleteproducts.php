<?php

// var_dump($user_id);
require("db_connectionform.php");
$user_id=$_GET['id'];
$delete="DELETE from products where id=$user_id";
$connect->query($delete);
header('Location:products.php');
?>