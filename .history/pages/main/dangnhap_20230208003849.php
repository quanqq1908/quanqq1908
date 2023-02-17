<?php

include('../config/config.php');
if(isset($_POST['dangnhap'])){
  $taikhoan = $_POST['username'];
  $matkhau = md5($_POST['password']);
  $sql = "SELECT * FROM tbl_admin WHERE username= '" . $taikhoan . "' AND password= '" . $matkhau . "' LIMIT 1";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if($count>0){
    $_SESSION['dangnhap'] = $taikhoan;
    header("Location:indexxx.php");
  }else{
    echo '<script>alert("Tài khoản hoặc mật khẩu không đúng!")</script>';
    header("Location:login.php");
  }
}
<style>
.dn{
    padding: 8px;
    margin: 8px;
}
form {
    padding:5px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
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

.cancelbtn {
  border-radius: 5px;
  width: auto;
  padding: 10px 18px;
  background-color: #b70015;
}



.container {
  padding: 10px;
  width: 30%;
  
}

span.psw {
  float: right;
  padding-top: 16px;
}


</style>

<h3>Đăng nhập</h3>
<div class="dn">
<form action="" autocomplete="off" method="POST">
  <div class="container">
    <label><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Nhập mật khẩu" name="password" required>
        
    <button type="submit" name="dangnhap">Đăng nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</br>
    <button type="button" class="cancelbtn" name="dangky"><a style="text-decoration:none; color:white" href="index.php?quanly=dangky">Trở về</a></button>
    <span class="psw">Forgot <a style="text-decoration:none; color:red"  href="#">password?</a></span>
  </div>
</form>
</div>