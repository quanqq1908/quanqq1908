<?php
    if(isset($_GET['action'])== 'dangxuat'){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
    }
?>
<ul class="ad_list">
    <li><a href="indexxx.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li><a href="indexxx.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
    <li><a href="indexxx.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
    <li><a href="indexxx.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a></li>
    <li><a href="indexxx.php?action=dangxuat&query=them">Đăng xuất: <?php if (isset($_SESSION['dangnhap'])) {
        echo $_SESSION['dangnhap'];
    }?></a></li>
</ul>