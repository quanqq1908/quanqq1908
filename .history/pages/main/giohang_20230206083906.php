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
      $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
      $i++;
      ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $cart_item['masp']?></td>
    <td><?php echo $cart_item['tensanpham']?></td>
    <td><?php echo $cart_item['hinhanh']?></td>
    <td><?php echo $cart_item['soluong']?></td>
    <td><?php echo number_format( $cart_item['giasp'],0,',','.').' đ'?></td>
    <td><?php echo $thanhtien?></td>
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
