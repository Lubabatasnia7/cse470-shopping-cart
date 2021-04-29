<?php
  include_once '../Model/dbh.inc.php';
  $name=$_POST['new_name'];
  $pwd=$_POST['new_password'];
  $data = mysqli_query($conn,"SELECT admin_password FROM admin WHERE admin_name='admin';");
  $result= mysqli_fetch_array($data);
  $pwdsv= $result[0];
  if($pwd==$pwdsv){
    echo "Login Successful";
    header("Location: ../View/adminhome.php?adminlogin=success");
  }
  else{
    echo "Incorrect Password";
  }
?>
