<?php
 $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc='$_GET[id]'  ORDER BY tbl_sanpham.id_sanpham DESC";
 $query_pro = mysqli_query($mysqli,$sql_pro);
// $row_title = mysqli_fetch_array($query_pro);
?>
<h3>Danh mục sản phẩm: </h3>
<ul class="product_list">
                <?php
                    while ($row_pro = mysqli_fetch_array($query_pro)) {
                        ?>
                <li> <a href="">
                    <img src="admincp/modun/modunn/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>">
                    <p class="titel_product"><?php echo $row_pro['tensanpham']?></p>
                    <p class="price_product"><?php echo number_format( $row_pro['giasp']).'vnđ'?></p>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>