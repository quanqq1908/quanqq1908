<?php
 $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
 $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<ul class="product_list">
                <?php
                    while ($row = mysqli_fetch_array($query_danhmuc)) {
                ?>
                <li> <a href="">
                    <img src="admincp/modun/modunn/quanlysp/uploads/<?php echo $row['hinhanh']?>">
                    <p class="titel_product"><?php echo $row['tensanpham']?></p>
                    <p class="price_product"><?php echo number_format($row['giasp'],0,',','.')?>vnđ</p>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>