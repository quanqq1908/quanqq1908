<?php
session_start();
include('../../admincp/config/config.php');
//them so luong
//tru so luong
//xoa san pham
//them san pham vao gio hang
if (isset($_POST['themgiohang'])) {
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='" . $id . "' LIMIT 1";
}
?>