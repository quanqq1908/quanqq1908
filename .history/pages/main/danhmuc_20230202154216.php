<?php
 $sql_pro = "SELECT * FROM tbl_danhmuc.tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc ORDER BY id_danhmuc DESC";
 $query_pro = mysqli_query($mysqli,$sql_danhmuc);
?>
<h3>Danh mục sản phẩm</h3>
<ul class="product_list">
                <li> <a href="">
                    <img src="images/iphone14.png">
                    <p class="titel_product">Iphone 14 Pro Max</p>
                    <p class="price_product">31.000.000 vnđ</p>
                    </a>
                </li>
            </ul>