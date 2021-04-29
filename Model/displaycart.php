<?php
  include_once 'dbh.inc.php';
  $sql="Select * from cart";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <header class="pth">
    Cart <br>
  </header>
  <div class="tl1 carttable">
    <!-- <h2>Total Price</h2> -->
    <a href="../Controller/index.php"><button class="b" type="button" name="button">Continue Shopping</button>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Measurements</th>
    </tr>
    <?php
    $totalprice=0;
    while($result=mysqli_fetch_assoc($data)){
      $I_id = $result['Item_id'];
      echo "<form action='deleteitemcart.inc.php' method='POST'><tr>
      <td><input type='hidden' name='Item_id' value=$I_id>".$result['Item_id']."</td>
      <td>".$result['Item_name']."</td>
      <td>".$result['Item_quantity']."</td>
      <td>".$result['Item_Price']."</td>
      <td>".$result['Item_size']."</td>
      <td><input type='submit' name='delcart' value='Delete'></td>
      </tr>
      </form>";
      $totalprice=$totalprice+($result['Item_Price']*$result['Item_quantity']);
    }
    echo "<div class='sum'>".'Total Price: '.$totalprice."<div>";
?>
</table></div>
