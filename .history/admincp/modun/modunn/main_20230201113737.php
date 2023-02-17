<div class="clear">
    
</div>
<div class="main">
<?php
           if(isset($_GET['action']) && $_GET['query']){
               $tam = $_GET['action'];
               $query = $_GET['action'];
           } 
           else{
               $tam = '';
           }
           if($tam == 'quanlydanhmucsanpham'){
               include("modunn/quanlydanhmucsp/them.php");
               include("modunn/quanlydanhmucsp/lietke.php");
           } else{
               include("modunn/dashboard.php");
           }
           ?>
</div>
 