<?php
$mysqli = new mysqli("localhost","root","","web_mysql");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối không thành công" . $mysqli -> connect_error;
  exit();
}

?>
