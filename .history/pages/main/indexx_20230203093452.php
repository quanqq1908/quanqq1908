<?php
 $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
 $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<ul class="product_list">
                <li> <a href="">
                    <img src="images/iphone14.png">
                    <p class="titel_product">Tên sản phẩm: Iphone 14 Pro Max</p>
                    <p class="price_product">31.000.000 vnđ</p>
                    </a>
                </li>
                <li> <a href="">
                    <img src="images/sss222.png">
                    <p class="titel_product">Samsung S22 Ultra</p>
                    <p class="price_product">31.000.000 vnđ</p>
                    </a>
                </li>
            </ul>