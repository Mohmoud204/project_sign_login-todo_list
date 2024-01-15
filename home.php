<?php
include "connect.php";
if (!$_COOKIE["id"]) {
  header("location: login.php");
} else {
  $id = $_COOKIE["id"];
  $add = "SELECT * FROM `learn_php` WHERE id= '$id' ";
  $Query = mysqli_query($conn, $add);
  while ($row = mysqli_fetch_array($Query)) {
    echo "your name is " . $row["name"];
  }
}
?>
<form action="">
  <button type="submit"><a href="sign.php">Sign In</a></button>
  <button type="submit"><a href="login.php">Log In</a></button>
  <button type="submit"><a href="edit.php">EditDate</a></button>
  <button type="submit"><a href="delete.php">DeleteDate</a></button>
</form>
<?php include "connect.php";
/*
setcookie("id", $row["id"], time() + 86400 * 30 * 15);
      header("Location: home.php");
*/
?>
<form action="addTodo.php" method="post">
  <input type="text" name="todo" id="" placeholder="Enter your todo" required=""> 
  <input type="submit" value="Add" name="add">
</form>

<?php
$GetAll = "SELECT * FROM `todos` WHERE User_id = $id";
$Query = mysqli_query($conn, $GetAll);
while ($row = mysqli_fetch_array($Query)) { ?>
 <div style="display:flex;">
 <div class="card" style="width:300px ; background:black; color:yellow; font-size:25px ; font-weight:40px;
 padding:3px;margin:15px 0px;
 ">
  
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["title"]; ?></h5>
    <a href="deleteTodo.php?id=<?php echo $row[
      "id"
    ]; ?>" class="btn btn-primary" style="background:black; color:green ;">DeleteTodo</a>
    <a href="editTodo.php?id=<?php echo $row[
      "id"
    ]; ?>" class="btn btn-primary" style="background:black; color:green ;">EditTodo</a>
  </div>
  </div>
</div>
 <?php }

