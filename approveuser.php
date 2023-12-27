<?php

// var_dump($user_id);
require("db_connectionform.php");
$user_id=$_GET['id'];
$update = "UPDATE register SET approvestatus=1  WHERE id=$user_id";
$connect->query($update);
header('Location:newregister.php');
?>