<p>Chi tiết sp</p>
<?php
 $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
 $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
    ?>
<div class="hinhanh_sanpham">
<img width="30%" src="admincp/modun/modunn/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
</div>
<div class="chitiet_sanpham">
    <h3><?php echo $row_chitiet['tensanpham']?></h3>
    <p><?php echo $row_chitiet['masp']?></p>
    <p><?php echo number_format( $row_chitiet['giasp'],0,',','.').'vnđ'?></p>
    <p><?php echo $row_chitiet['soluong']?></p>
    <p><?php echo $row_chitiet['']?></p>
</div>
<?php
}
?>