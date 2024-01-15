<?php
include "connect.php";
$User_id = $_COOKIE["id"];
if (isset($_POST["add"])) {
  $todo = strip_tags($_POST["todo"]);
  $add = "INSERT INTO `todos`(`id`, `title`, `complete`, `User_id`) VALUES ('','$todo','','$User_id')";
  $Query = mysqli_query($conn, $add);
  header("Location: home.php");
}
