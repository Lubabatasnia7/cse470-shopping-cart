<?php
  include_once 'dbh.inc.php';
  $sql="Select * from items";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <header class="pth">
    Item inventory <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Brand Name</th>
      <th>Category</th>
      <th>Measurements</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['Item_id']."</td>
      <td>".$result['Item_name']."</td>
      <td>".$result['Item_Price']."</td>
      <td>".$result['Item_quantity']."</td>
      <td>".$result['Item_brand']."</td>
      <td>".$result['Item_category']."</td>
      <td>".$result['Item_size']."</td>
      </tr>";
    }

?>
</table></div>
