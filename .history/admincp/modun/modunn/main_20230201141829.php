<div class="clear">
    
</div>
<div class="main">
<?php
           if(isset($_GET['action']) && $_GET['query']){
               $tam = $_GET['action'];
               $query = $_GET['query'];
           } 
           else{
               $tam = '';
                $query = '';
           }
           if($tam == 'quanlydanhmucsanpham' && $query =='them'){
               include("modunn/quanlydanhmucsp/them.php");
               include("modunn/quanlydanhmucsp/lietke.php");
           }elseif($tam == 'quanlydanhmucsanpham' && $query =='sua'){
            include("modunn/quanlydanhmucsp/sua.php");
           } else{
               include("modunn/dashboard.php");
           }
           ?>
</div>
 