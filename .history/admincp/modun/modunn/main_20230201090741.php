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
               include("modunn/dashboard.php");
           }
           ?>
</div>
 