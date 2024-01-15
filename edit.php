<?php
include "connect.php";
$id = $_COOKIE["id"];
$add = "SELECT * FROM `learn_php` WHERE id= '$id' ";
$Query = mysqli_query($conn, $add);
while ($row = mysqli_fetch_array($Query)) { ?>
<form action="" method="post">
  <input type="text" name="name" id="" value="<?php echo $row[
    "name"
  ]; ?>" placeholder="Enter your todo" required=""> 
  <input type="text" name="todo" id="" value="<?php echo $row[
    "email"
  ]; ?>" placeholder="Enter your todo" required=""> 
  <input type="submit" value="Add" name="add">
</form>
<?php if (isset($_POST["add"])) {
  $newEmail = strip_tags($_POST["todo"]);
  $newName = strip_tags($_POST["name"]);
  $edit = "UPDATE `learn_php` SET `id`='$row[id]',`name`='$newName',`email`='$newEmail',`password`='$row[password]' WHERE id = $id";
  $Query = mysqli_query($conn, $edit);
  header("location: home.php ");
}}
