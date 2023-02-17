<?php
$sql_lietke_danhmucsp = "SELECT * FORM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp =  mysqli_query($mysqli, $sql_them);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1px" width= 50% style="border-collapse:collapse" >
  <tr>
    <td>Tên danh mục</td>
    <td>Thứ tự</td>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp))
  ?>
  <tr>
  <td>Thứ tự</td>
    <td>Maria Anders</td>
    <td><input type="text" name="tendanhmuc"></td>
  </tr>
</table>