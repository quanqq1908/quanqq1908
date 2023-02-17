<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp =  mysqli_query($mysqli, $sql_lietke_sp);
?>
<div class="lk">
<h4>Liệt kê sản phẩm</h4>
<table border="1px" width= 90% style="border-collapse:collapse" >
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
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
    <td ><img src="modunn/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width ="130px" height="130px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if ($row['tinhtrang'] == 1) {
      echo "Kích hoạt";
    } else  {
      echo "Ẩn";
    }
    ?></td>
    <td>
      <a  style="text-decoration:none; color:red" href="modunn/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | <a  style="text-decoration:none; color:green" href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
    </td>
  </tr>
  <?php
}
?>
</table>
</div>