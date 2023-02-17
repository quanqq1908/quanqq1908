<?php
session_start();
include("../../admincp/config/config.php");
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0,9999);
$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE ('".$id_khachhang."','".$code_order."',1)";

?>