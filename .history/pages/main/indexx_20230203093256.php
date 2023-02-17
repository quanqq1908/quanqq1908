<?php
 $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]'  ORDER BY id_sanpham DESC";
 $query_pro = mysqli_query($mysqli,$sql_pro);
 //goi ten danh muc
 $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
 $query_cate = mysqli_query($mysqli,$sql_cate);
 $row_title = mysqli_fetch_array($query_cate);
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