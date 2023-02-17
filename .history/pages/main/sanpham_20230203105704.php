<p>Chi tiết sp</p>
<?php
 $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham= $_GET[id] ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
 $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<div class="hinhanh_sanpham">

</div>
<div class="chitiet_sanpham">

</div>