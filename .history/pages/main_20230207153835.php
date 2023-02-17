<div id="main">
        <?php
        include("pages/sidebar/sidebar.php");
        ?>
        <div class="maincontent">
           <?php
           if(isset($_GET['quanly'])){
               $tam = $_GET['quanly'];
           } 
           else{
               $tam = '';
           }if($tam == 'danhmucsanpham'){
               include("main/danhmuc.php");
           } else if($tam == 'giohang') {
            include("main/giohang.php");
           }else if($tam == 'lienhe') {
            include("main/lienhe.php");
           }else if($tam == 'tintuc') {
            include("main/tintuc.php");
            }else if($tam == 'sanpham') {
            include("main/sanpham.php");
            }else if($tam == 'dangky') {
            include("main/dangky.php");
        }else if($tam == 'thanhtoan') {
            include("main/thanhtoan.php");
           } else{
               include("main/indexx.php");
           }
           ?>
        </div>
    </div>
    