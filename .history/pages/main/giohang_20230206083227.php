<?php
session_start();
?>
<h3>Giỏ hàng</h3>
<?php
if(isset($_SESSION['cart'])){
   
}
?>
<table>
  <tr>
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
  </tr>
  <?php
  if (isset($_SESSION['cart'])) {
    $i = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
      $i++;
      ?>
  <tr>
    <td><?php echo $i?></td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <?php
    }
  } else {
    ?>
    <tr>
    <td colspan="6"><p>Hiện tại trống</p></td>
    </tr>
  <?php
  }
  ?>
</table>
