<form action="" method="post">
  <input type="email" name="email" id="" placeholder="email">
  <input type="password" name="password" id="" placeholder="password">
  <input type="submit" name="send" id="" value="send">
  <button type="submit"><a href="sign.php">Sign In</a></button>
</form>
<?php
require "connect.php";
if (isset($_POST["send"])) {
  $email = strip_tags($_POST["email"]);
  $password = strip_tags(sha1($_POST["password"]));
    $add = "SELECT * FROM `learn_php` WHERE email= '$email' ";
    $Query = mysqli_query($conn, $add);
    while ($row = mysqli_fetch_array($Query)) {
      if ($row["email"] == $email && $row["password"] == $password) {
        setcookie("id", $row["id"], time() + 86400 * 30 * 15);
        header("Location: home.php");
      }
    }
  
}

