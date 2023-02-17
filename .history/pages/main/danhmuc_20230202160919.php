<?php
 $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc='$_GET[id]'  ORDER BY tbl_sanpham.id_sanpham DESC";
 $query_pro = mysqli_query($mysqli,$sql_pro);
 if($query_pro){
    $row_title = mysqli_fetch_array($query_pro);
 }
$row_title = 'Hiện tại chưa có sản phẩm';
?>
<h3>Danh mục sản phẩm: <?php echo $row_danhmuc['tendanhmuc']?></h3>
<ul class="product_list">
                <?php
                    while ($row_pro = mysqli_fetch_array($query_pro)) {
                        ?>
                <li> <a href="">
                    <img src="images/iphone14.png">
                    <p class="titel_product">Iphone 14 Pro Max</p>
                    <p class="price_product">31.000.000 vnđ</p>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>