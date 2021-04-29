<?php
include_once '../Model/dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Item Data</title>
  </head>
  <link rel="stylesheet" href="CSS/style.css">
  <body>
    <div class="formcontent">
    <form action="../Model/insertitem.inc.php" method="post">
      Item ID:<input type ="number" name="Item_id" placeholder="ID"><br>
      Item Name:<input type ="text" name="Item_name" placeholder="Name"><br>
      Item Price:<input type ="number" name="Item_Price" placeholder="Price"><br>
      Item Quantity:<input type ="number" step="0.01" name="Item_quantity" placeholder="Quantity"><br>
      Item Brand:<input type ="text" step="0.01" name="Item_brand" placeholder="Brand"><br>
      Item Category:<input type ="text" name="Item_category" placeholder="Category"><br>
      Item Measurement:<input type ="text" name="Item_size" placeholder="Size"><br>
      <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>
