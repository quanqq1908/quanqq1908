<?php
$sql_lietke_danhmucsp = "SELECT * FORM tbl_danhmuc ORDER BY thutu DESC";
$row_lietkedanhmucsp =  mysqli_query($mysqli, $sql_them);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1px" width= 50% style="border-collapse:collapse" >
  <tr>
    <td>Tên danh mục</td>
    <td><input type="text" name="tendanhmuc"></td>
  </tr>
  <tr>
  <td>Thứ tự</td>
    <td>Maria Anders</td>
   
  </tr>
</table>