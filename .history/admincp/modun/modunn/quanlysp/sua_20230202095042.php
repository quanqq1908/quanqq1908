<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]'LIMIT 1 ";
$query_sua_sp =  mysqli_query($mysqli, $sql_sua_sp);
?>
<p style="color: red;">Sửa sản phẩm</p>
<table border="1px" width= 70% style="border-collapse:collapse">
<form method="POST" action="modunn/quanlysp/xuly.php" enctype="multipart/form-data">
  <?php
  while ($row = mysqli_fetch_array($query_sua_sp)) {
    ?>
<tr>
   <td>Tên sản phẩm</td>
    <td><input type="text" value="" name="tensanpham"></td>
  </tr>
  <tr>
   <td>Mã số</td>
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
   <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp"></td>
  </tr>
  <tr>
   <td>Tóm tắt</td>
    <td><textarea rows="5" style="resize: none" name="tomtat" ></textarea></td>
  </tr>
  <tr>
   <td>Nội dung</td>
    <td><textarea cols="50" rows="7" name="noidung" ></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
   <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
   <td>Tình trạng</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
</form>
  <?php
  }
  ?>
</table>

