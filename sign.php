<form action="" method="post">
  <input type="text" name="name" id="" placeholder="name">
  <input type="email" name="email" id="" placeholder="email">
  <input type="password" name="password" id="" placeholder="password">
  <input type="submit" name="send" id="" value="send">
</form>
<?php
require "connect.php";
if (isset($_POST["send"])) {
  $name = strip_tags($_POST["name"]);
  $email = strip_tags($_POST["email"]);
  $password = strip_tags(sha1($_POST["password"]));

  $add = "INSERT INTO `learn_php`(`id`, `name`, `email`, `password`) VALUES ('','$name','$email','$password')";
  $Query = mysqli_query($conn, $add);
  header("Location: login.php");
}

