<?php
//echo('Q')
session_start();
include('../../admincp/config/config.php');
//them so luong
//tru so luong
//xoa san pham
//them san pham vao gio hang
if (isset($_GET['themgiohang'])) { 
    $id = $_GET['idsanpham'];
    echo $id; 
    // $soluong = 1;
    // $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    // $query = mysqli_query($mysqli,$sql);
    // $row = mysqli_fetch_array($query);
    // if($row){
    //     $new_product = array(array('tensanpham'=>$row['tensanpham'], 'id'=>$id, 'soluong'=>$cart_item['soluong'], 'giasp'=>$row['giasp'], 'hinhanh'=>$row['hinhanh'], 'masp'=>$row['masp']));
    //     //kiem tra session 
    //     if(isset($_SESSION['cart'])){
    //         $found = false;
    //         foreach($_SESSION['cart'] as $cart_item){
    //             if($cart_item['id']==$id){
    //                 $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
    //                 $found = true;
    //             }else{
    //                 $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
    //             }
    //         }
    // }
    // else{
    //         $_SESSION['cart'] = $new_product;
    // }
    // }
    // header('Location:index.php?quanly=giohang');
} 

?>
