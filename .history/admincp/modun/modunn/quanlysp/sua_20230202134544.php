<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]'LIMIT 1 ";
$query_sua_sp =  mysqli_query($mysqli, $sql_sua_sp);
?>
<p style="color: red;">Sửa sản phẩm</p>
<table border="1px" width= 70% style="border-collapse:collapse">
<form method="POST" action="modunn/quanlysp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" enctype="multipart/form-data">
  <?php
  while ($row = mysqli_fetch_array($query_sua_sp)) {
    ?>
<tr>
   <td>Tên sản phẩm</td>
    <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
  </tr>
  <tr>
   <td>Mã số</td>
    <td><input type="text" name="masp" value="<?php echo $row['masp']?>"></td>
  </tr>
  <tr>
   <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp" value="<?php echo $row['giasp']?>"></td>
  </tr>
  <tr>
   <td>Tóm tắt</td>
    <td><textarea rows="5" style="resize: none" name="tomtat"><?php echo $row['tomtat']?></textarea></td>
  </tr>
  <tr>
   <td>Nội dung</td>
    <td><textarea cols="50" rows="7" name="noidung" ><?php echo $row['noidung']?></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong" value="<?php echo $row['soluong']?>"></td>
  </tr>
  <tr>
   <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh">
    <img src="modunn/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width ="160px" height="170px">
  </td>
  </tr>
  <tr>
   <td>Tình trạng</td>
    <td>
      <select name="tinhtrang">
        <?php
        if ($row['tinhtrang'] == 1) {
          ?>
        <option value="1" selected >Kích hoạt</option>
        <option value="0">Ẩn</option>
        <?php
        }else{
        ?>
        <option value="1">Kích hoạt</option>
        <option value="0" selected>Ẩn</option>
          
        <?php
        } 
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
  </tr>
</form>
  <?php
  } 
  ?>
</table>

