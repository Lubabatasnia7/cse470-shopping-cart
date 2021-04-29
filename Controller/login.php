<?php
  include_once "../Model/dbh.inc.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../View/css/loginstyle.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <body>
    <div class="wrapper">
      <img class="or" src="../View/image/or.png" alt="">
      <div class="block1">
        <img src="../View/image/b03d2323-9462-4741-89ef-c2bb047fff18-en.jfif" alt="">
        <h2>Get Started</h2>
        <p>sign up with</p>
        <button type="button" name="button" class="btn b1"><i class="fab fa-facebook"></i> Facebook</button>
        <button type="button" name="button" class="btn b2"><i class="fab fa-google-plus-g"></i> google</button>
      </div>
       <div class="block2">
        <button type="button" name="button" class="user"><i class="fas fa-user"></i></button>
        <!-- <div class="login">
          <button type="button" name="button" class="usericon"><i class="far fa-user"></i></button>
          <input class="name" type="text" name="" value="" placeholder="Username" autocomplete="on"><br>
          <button type="button" name="button" class="passicon" placeholder="password" required><i class="fas fa-unlock-alt"></i></button>
          <input class="pass" type="password" name="" value="">
          <button class="logbtn" type="submit" name="button">Sign in</button>
        </div> -->
        <div class="form">
          <form class="register-form" action="show_info.inc.php" method="POST">
            <input name="user_name" type="text" placeholder="Name">
            <input name="contact" type="Mobiler" placeholder="Mobile">
            <input name="mail" type="text" placeholder="Email id">
            <input name="pass" type="password" placeholder="Password">
            <input name="c_pass" type="password" placeholder="Confirm password" required>
            <button name="register" type="submit">Create</button>
            <p class="message">Already Registered <a>Login</a></p>
          </form>
          <form class="login-form" action="show_info.inc.php" method="POST">
           <input name="new_name" type="text" placeholder="User Name">
           <input name="new_password" type="password" placeholder="Password">
           <button name="log" type="submit">login</button>
           <p class="message">Not Registered? <a>Register</a></p>
          </form>
          <span>forgot password?</span>
        </div>
      </div>
    </div>
    <script src="loginscript.js" charset="utf-8"></script>
  </body>
</html>
