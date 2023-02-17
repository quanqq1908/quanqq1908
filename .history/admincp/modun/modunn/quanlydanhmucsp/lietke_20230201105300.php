<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp =  mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1px" width= 100% style="border-collapse:collapse" >
  <tr>
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Thứ tự</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td>Maria Anders</td>
    <td>Maria Anders</td>
  </tr>
  <?php
}
?>
</table>