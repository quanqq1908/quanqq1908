<?php
include('../../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];

if(isset($_POST['themsanpham'])){
    //them
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../indexxx.php?action=quanlydanhmucsanpham&query=them');
} elseif(isset($_POST['suasanpham']))  {
    //sua
    $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."', thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../indexxx.php?action=quanlydanhmucsanpham&query=them');
}else{     
    //xoa
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../indexxx.php?action=quanlydanhmucsanpham&query=them');
}
?>