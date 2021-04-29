<?php
  include_once '../Model/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="CSS/style.css">
  <body>
    <div class="formcontent">
    <form  action="../Controller/deleteitem.inc.php" method="post">
      Delete item data :<input type="number" name="Item_id" placeholder="item id">
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>
