<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
$query_lietke_sp =  mysqli_query($mysqli, $sql_lietke_sp);
?>
<p>Liệt kê sản phẩm</p>
<table border="1px" width= 70% style="border-collapse:collapse" >
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Mã SP</th>
    <th>Tóm tắt</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['hinhanh'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if ($row['tinhtrang'] == 1) {
      echo "Kích hoạt";
    } else  {
      echo "Ẩn";
    }
    ?></td>
    <td>
      <a href="modunn/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
    </td>
  </tr>
  <?php
}
?>
</table>