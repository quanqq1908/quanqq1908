<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart_detail,tbl_sanpham WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham WHERE tbl_cart_detail.code_cart ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh =  mysqli_query($mysqli, $sql_lietke_dh);
?>
<div class="lk">
<h4>Chi tiết đơn hàng</h4>
<table border="1px" width= 70% style="border-collapse:collapse" >
  <tr>
    <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>SĐT</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
      <a style="text-decoration:none; color:green;" href="modunn/quanlydonhang/xemdonhang.php?code=<?php echo $row['id_cart']?>">Xem đơn hàng</a> 
    </td>
  </tr>
  <?php
}
?>
</table>
</div>