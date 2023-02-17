<style>
.dn{
    padding: 8px;
    margin: 8px;
}
form {
    padding:5px;
}
h2{
    text-align: center;
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

<h2>Đăng nhập</h2>
<div class="dn">
<form action="" autocomplete="off" method="POST">
  <div class="container">
    <label><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="dangnhap">Đăng nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</br>
    <button type="button" class="cancelbtn" name="dangky">Trở về</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>