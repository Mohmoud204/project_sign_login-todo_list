<?php
$id = $_GET["id"];
require "connect.php";
$add = "SELECT * FROM `todos` WHERE id= $id";
$Query = mysqli_query($conn, $add);
while ($row = mysqli_fetch_array($Query)) { ?>
<form action="" method="post">
  <input type="text" name="name" id="" value="<?php echo $row[
    "title"
  ]; ?>" placeholder="Enter your todo" required=""> 
  <input type="submit" value="edit" name="add">
  </form>
  <?php if (isset($_POST["add"])) {
    $newTodo = strip_tags($_POST["name"]);

    $data = "UPDATE `todos` SET `id`='$row[id]',`title`='$newTodo',`complete`='$row[complete]',`User_id`='$row[User_id]' WHERE id = $id";
    $Query = mysqli_query($conn, $data);
    header("location: home.php ");
  }}
