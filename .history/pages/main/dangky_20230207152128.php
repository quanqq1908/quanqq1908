<?php
session_start();
if (isset($_POST['dangky'])) {
  $tenkhachhang = $_POST['hovaten'];
  $email = $_POST['email'];
  $dienthoai = $_POST['dienthoai'];
  $matkhau = md5($_POST['matkhau']);
  $diachi = $_POST['diachi'];
  $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,dienthoai,matkhau,diachi) VALUE('". $tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
  if($sql_dangky) {
    echo '<p style="color:green; font-size:15px">Bạn đã đăng ký thành công</p>';
    $_SESSION['dangky'] = $tenkhachhang;
    header('Location:index.php?quanly=giohang');
  }
}
?>
<style>
.f {font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    margin: 5px;
}
form {
    padding-left: 6px;
}
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 8px;
}

button {
  border-radius: 8px;
  background-color: #b70015;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.container {
  padding: 10px;
  width: 30%;
}
</style>

<div class="f">

<h3>Đăng ký tài khoản</h3>

<form action="" method="POST">
  <div class="container">
    <label><b>Họ và tên</b></label>
    <input type="text" placeholder="Điền họ và tên" name="hovaten" required>
    <label><b>Email</b></label>
    <input type="email" placeholder="...@gmail.com" name="email" required>
    <label><b>Điện thoại</b></label>
    <input type="text" placeholder="Điền SĐT" name="dienthoai" required>
    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Điền mật khẩu" name="matkhau" required>
    <label><b>Địa chỉ</b></label>
    <input type="text" placeholder="Điền địa chỉ" name="diachi" required>
    <button type="submit" name="dangky">Đăng ký</button>
    
  </div>
</form>
</div>