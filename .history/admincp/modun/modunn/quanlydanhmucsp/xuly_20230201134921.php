<?php
include('../../../config/config.php');
if(isset($_POST['themdanhmuc'])){
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../indexxx.php?action=quanlydanhmucsanpham');
} elseif(isset($_POST['suadanhmuc']))  {

}else{     
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../indexxx.php?action=quanlydanhmucsanpham&query=them');
}
?>