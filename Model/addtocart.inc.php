<?php
  include_once 'dbh.inc.php';
  $Item_id = $_POST['Item_id'];
  $Item_name = $_POST['Item_name'];
  $Item_quantity = $_POST['Item_quantity'];
  $Item_Price = $_POST['Item_Price'];
  $Item_size = $_POST['Item_size'];
  $sql = "Insert into cart(Item_id,Item_name,Item_quantity,Item_Price,
  Item_size) values ('$Item_id','$Item_name',
  '$Item_quantity','$Item_Price','$Item_size');";
  mysqli_query($conn,$sql);
  header("Location: displaycart.php?signupplayer=success");
?>
