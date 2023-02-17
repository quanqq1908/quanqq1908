
<h3>Giỏ hàng
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'của '.$_SESSION['dangky'];
  }
  ?>
</h3>
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
    <td>
      <a style=" font-size:20px;color:red; text-decoration: none; "href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']?>">+</a>
    <?php echo $cart_item['soluong']?>
      <a style=" font-size:25px;color:red;text-decoration: none;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']?>">-</a>
  </td>
    <td><?php echo number_format( $cart_item['giasp'],0,',','.').' đ'?></td>
    <td><?php echo number_format( $thanhtien,0,',','.').' đ'?></td>
    <td><a style="color:red;text-decoration: none" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
  </tr>
  <?php
    }
?>
 <tr>
    <td colspan="8">
    <p style="float:left">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' đ'?> </p>
    <p style="float:right"><a style="color:green;text-decoration: none" href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
    <div style="clear:both;"></div>

    <?php
    if (isset($_SESSION['dangky'])) {
      ?>
      <button type="button" ><a style="text-decoration: none;" href="index.php?quanly=thanhtoan">Đặt hàng</a></button>
    <?php
    } else {
      ?>
         <button type="button" ><a style="text-decoration: none; color:aliceblue" href="index.php?quanly=dangky">Đăng ký đặt hàng</a></button>
    <?php
    }
    ?>
   
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
