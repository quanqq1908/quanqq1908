<div class="sidebar">
        <ul class="list_sidebar">
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=1">Iphone</a></li>
          
        </ul>
        </div>