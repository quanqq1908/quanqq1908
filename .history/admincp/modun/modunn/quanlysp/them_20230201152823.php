<p>Thêm sản phẩm</p>
<table border="1px" width= 50% style="border-collapse:collapse">
<form method="POST" action="modunn/quanlysp/xuly.php">
<tr>
   <td>Tên sản phẩm</td>
    <td><input type="text" name="tensp"></td>
  </tr>
  <tr>
   <td>Mã số</td>
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
   <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp"></td>
  </tr>
  <tr>
   <td>Tóm tắt</td>
    <td><textarea rows="5" style="resize: none" name="tomtat" ></textarea></td>
  </tr>
  <tr>
   <td>Nội dung</td>
    <td><textarea cols="50" rows="7" name="noidung" ></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
   <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
   <td>Tình trạng</td>
    <td>
      <select>
        <option>Kích hoạt</option>
        <option value="">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
</form>
  
</table>
