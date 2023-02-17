<?php
include('../../../config/config.php');
if(isset($_POST['themdanhmuc'])){
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    // print_r($_POST['themdanhmuc']);
    echo "đây là trang lưu";
    // $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
    // mysqli_query($web_mysql, $sql_them);
    // header('Location:../../indexxx.php?action=quanlydanhmucsanpham');
}
?>