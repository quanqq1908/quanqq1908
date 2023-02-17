<div class="clear">
    
</div>
<div class="main">
<?php
           if(isset($_GET['action'])){
               $tam = $_GET['action'];
           } 
           else{
               $tam = '';
           }
           if($tam == 'quanlydanhmucsanpham'){
               include("main/danhmuc.php");
           } else{
               include("main/dashboard.php");
           }
           ?>
</div>
 