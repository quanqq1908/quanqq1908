<p>Chi tiết sp</p>
<?php
 $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
 $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
 while($row_chitiet = mysqli_fetch_array($query_chitiet))
?>
<div class="hinhanh_sanpham">

</div>
<div class="chitiet_sanpham">

</div>