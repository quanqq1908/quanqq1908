<?php
session_start();
?>
<h3>Giỏ hàng</h3>
<?php
if(isset($_SESSION['cart'])){
   
}
?>
<table style="width: 100%; text-align:center; border-collapse:collapse" border="1" >
  <tr>
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php
  if (isset($_SESSION['cart'])) {
    $i = 0;
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
      $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
      $tongtien += $thanhtien;
      $i++;
      ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $cart_item['masp']?></td>
    <td><?php echo $cart_item['tensanpham']?></td>
    <td><img width="110px" src="admincp/modun/modunn/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>"></td>
    <td >
      <a style="text-decoration: none; "href="">+</a>
    <?php echo $cart_item['soluong']?>
      <a style="text-decoration: none;" href="">-</a>
  </td>
    <td><?php echo number_format( $cart_item['giasp'],0,',','.').' đ'?></td>
    <td><?php echo number_format( $thanhtien,0,',','.').' đ'?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
  </tr>
  <?php
    }
?>
 <tr>
    <td colspan="8">
    <p style="float:left">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' đ'?> </p>
    <p style="float:right"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
  </td>
    </tr>
<?php 
  } else {
    ?>
    <tr>
    <td colspan="8"><p>Hiện tại trống</p></td>
    </tr>
  <?php
  }
  ?>
</table>
