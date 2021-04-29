<?php
  include_once 'dbh.inc.php';
  $Item_id = $_POST['Item_id'];
  $Item_name = $_POST['Item_name'];
  $Item_Price = $_POST['Item_Price'];
  $Item_quantity = $_POST['Item_quantity'];
  $Item_brand = $_POST['Item_brand'];
  $Item_category = $_POST['Item_category'];
  $Item_size = $_POST['Item_size'];
  $sql = "Insert into items(Item_id,Item_name,Item_Price,Item_quantity,
  Item_brand,Item_category,Item_size) values ('$Item_id','$Item_name',
  '$Item_Price','$Item_quantity','$Item_brand','$Item_category','$Item_size');";
  mysqli_query($conn,$sql);
  header("Location: ../View/iteminput.php?input=success");
?>
