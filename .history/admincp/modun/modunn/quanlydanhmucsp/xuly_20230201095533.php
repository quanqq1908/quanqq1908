<?php
include('../../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
    mysqli_query($web_mysql, $sql_them);
    header('Location:../../indexxx.php?action=quanlydanhmucsanpham');
}
?>