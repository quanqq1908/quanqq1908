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
               include("modunn/quanlydanhmucsp/them.php");
           } else{
               include("dashboard.php");
           }
           ?>
</div>
 