<?php
 $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
 $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
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