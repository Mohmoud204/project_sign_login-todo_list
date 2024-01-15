<?php
$id = $_GET["id"];
require "connect.php";

$add = "DELETE FROM `todos` WHERE id='$id' ";
$Query = mysqli_query($conn, $add);
header("location: home.php ");
