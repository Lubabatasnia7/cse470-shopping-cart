<?php
  include_once '../Model/dbh.inc.php';
  $Item_id=$_POST['Item_id'];
  $sql ="Delete from items where Item_id= '$Item_id';";
  $data = mysqli_query($conn,$sql);
  $result= mysqli_fetch_array($data);
  $pwdsv= $result[0];

  if($pwd==$pwdsv){
    echo "Delete Successful";
    header("Location: ../Model/displayitem.php?adminlogin=success");
  }
  else{
    echo "Incorrect Password";
  }
?>
