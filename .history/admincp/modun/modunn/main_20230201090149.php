<div class="clear">
    
</div>
<div class="main">
<?php
           if(isset($_GET['action'])){
               $tam = $_GET['action'];
           } 
           else{
               $tam = '';
           }if($tam == 'quanlydanhmucsanpham'){
               include("main/danhmuc.php");
           } else if($tam == 'quanlysanpham') {
            include("main/quanlysanpham.php");
           }else if($tam == 'quanlybaiviet') {
            include("main/lienhe.php");
           }else if($tam == 'quanlydanhmucbaiviet') {
            include("main/tintuc.php");
           } else{
               include("main/welcome.php");
           }
           ?>
</div>
 