<?php
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
    }
?>
<div class="menu">
<ul class="ad_list">
    <li><a href="indexxx.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li><a href="indexxx.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
    <li><a href="indexxx.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a></li>
    <li><a href="indexxx.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
    <li><a href="indexxx.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
    <li><a href="indexxx.php?dangxuat=1&query=them">Đăng xuất: <?php if (isset($_SESSION['dangnhap'])) {
        echo $_SESSION['dangnhap'];
    }?></a></li>
</ul>
</div>