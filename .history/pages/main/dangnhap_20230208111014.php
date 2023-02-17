<?php
if(isset($_POST['dangnhap'])){
  $taikhoan = $_POST['email'];
  $matkhau = md5($_POST['password']);
  $sql = "SELECT * FROM tbl_dangky WHERE email= '" . $taikhoan . "' AND matkhau= '" . $matkhau . "' LIMIT 1";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if($count>0){
    $_SESSION['dangky'] = $taikhoan;
    header("Location:index.php?quanly=giohang");
  }else{
    echo '<p style="color:red">Email hoặc Mật khẩu không đúng!!!</p>';
    
  }
}
?>
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
<form action=""  method="POST">
  <div class="container">
    <label><b>Tài khoản</b></label>
    <input class="tt" type="text" placeholder="...@gmail.com" name="email" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input class="tt" type="password" placeholder="Nhập mật khẩu" name="password" required>
        
    <button type="submit" name="dangnhap">Đăng nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Ghi nhớ?
    </label>
</br>
    <button type="button" class="cancelbtn" name="dangky"><a style="text-decoration:none; color:white" href="index.php?quanly=dangky">Đăng Ký</a></button>
    <span class="psw">Forgot <a style="text-decoration:none; color:red"  href="#">password?</a></span>
  </div>
</form>
</div>