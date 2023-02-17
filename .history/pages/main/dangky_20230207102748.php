<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đăng ký thành viên</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    margin: 5px;
}
form {
    padding-left: 6px;
}
h3{
    color: #b70015;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
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
  background-color: #92b2d0;
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
</head>
<body>

<h3>Đăng ký tài khoản</h3>

<form action="" autocomplete="off" method="POST">
  <div class="container">
    <label><b>Họ và tên</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Username" name="email" required>
    <label><b>Địa chỉ</b></label>
    <input type="text" placeholder="Enter Username" name="diachi" required>
    <label><b>Điện thoại</b></label>
    <input type="text" placeholder="Enter Username" name="dienthoai" required>

    <button type="submit" name="dangnhap">Đăng nhập</button>
    
  </div>
</form>
</body>
</html>