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
           } else if($tam == 'giohang') {
            include("main/giohang.php");
           }else if($tam == 'lienhe') {
            include("main/lienhe.php");
           }else if($tam == 'tintuc') {
            include("main/tintuc.php");
           } else{
               include("main/indexx.php");
           }
           ?>
</div>
 