<?php
  include('../../admincp/config/config.php');
$thutu = $_POST['thutu'];
if(isset($_POST['thutu'] )> 0){
  ?>
<div class="them">
  <p>Quản lý danh mục sản phẩm</p>
<table  width= 50% style="border-collapse:collapse">
<form method="POST" action="modunn/quanlydanhmucsp/xuly.php">
<tr>
   <td>Tên danh mục</td>
    <td><input type="text" name="tendanhmuc" required></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="thutu" required></td>
  </tr>
  <tr>
    <td colspan="2"><input class="button" type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm" ></td>
  </tr>
  <?php
  }else{
  echo 'Nhập số lớn hơn';
  }
  ?>

</form>
</table>
</div>
