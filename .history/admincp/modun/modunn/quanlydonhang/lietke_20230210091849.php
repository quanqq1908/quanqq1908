
<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_dangky WHERE tbl_cart.id_khachnhang= tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh =  mysqli_query($mysqli, $sql_lietke_dh);
?>
<div class="lk">
<h4>Liệt kê đơn hàng</h4>
<table border="1px" width= 70% style="border-collapse:collapse" >
  <tr>
    <th>ID</th>
    <th>Mã đơn hàng</th>
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
    <td><?php echo $row['thutu'] ?></td>
    <td>
      <a style="text-decoration:none; color:red" href="modunn/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xem đơn hàng</a>
    </td>
  </tr>
  <?php
}
?>
</table>
</div>