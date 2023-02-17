<?php
session_start();
?>
<h3>Giỏ hàng</h3>
<?php
if(isset($_SESSION['cart'])){
    print_r($_SESSION['cart']);
}
?>