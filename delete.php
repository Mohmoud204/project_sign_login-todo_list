<?php 
require "connect.php";
$id = $_COOKIE["id"];
$add = "DELETE FROM `learn_php` WHERE id='$id' ";
 $Query = mysqli_query($conn, $add);
 setcookie("id", null);
 header("location: home.php ");