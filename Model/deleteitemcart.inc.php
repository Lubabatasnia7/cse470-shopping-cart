<?php
  include_once 'dbh.inc.php';
  $Item_id=$_POST['Item_id'];
  $sql ="Delete from cart where Item_id= '$Item_id';";
  $data = mysqli_query($conn,$sql);
  $result= mysqli_fetch_array($data);
  $pwdsv= $result[0];

  if($pwd==$pwdsv){
    echo "Delete Successful";
    header("Location: displaycart.php?adminlogin=success");
  }
  else{
    echo "Incorrect Password";
  }
?>
