<?php
  include_once 'dbh.inc.php';
  $sql="SELECT * FROM items WHERE Item_category='Medicine';";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <header class="pth">
    Item inventory <br>
  </header>
  <div class="tl1 tl2">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Brand Name</th>
      <th>Category</th>
      <th>Measurements</th>
      <th></th>
    </tr>
    <?php
    $procuct=array();

    while($result=mysqli_fetch_assoc($data)){
      $I_id = $result['Item_id'];
      $I_name = $result['Item_name'];
      $I_quantity = $result['Item_quantity'];
      $I_Price = $result['Item_Price'];
      $I_size = $result['Item_size'];echo  $I_Price;
      echo "<form action='addtocart.inc.php' method='POST'><tr>
      <td><input type='hidden' name='Item_id' value=$I_id>".$result['Item_id']."</td>
      <td><input type='hidden' name='Item_name' value='$I_name'>".$result['Item_name']."</td>
      <td><input type='number' name='Item_quantity' placeholder='Choose Quantity'>".$result['Item_quantity']."</td>
      <td><input type='hidden' name='Item_Price' value=$I_Price>".$result['Item_Price']."</td>
      <td>".$result['Item_brand']."</td>
      <td>".$result['Item_category']."</td>
      <td><input type='hidden' name='Item_size' value=$I_size>".$result['Item_size']."</td>
      <td><input type='submit' name='addcart' value='add to cart'></td>
      </tr></form>";
    }
?>
</table></div>
