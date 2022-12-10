<div class="content-wrapper" style="min-height: 359px; background-color: #fff;">
    <?php
   if (isset($_GET['action']) && $_GET['query']) {
      $tam = $_GET['action'];
      $query = $_GET['query'];
   } else {
      $tam = '';
      $query = '';
   }
   if ($tam == 'danhmuc' && $query == 'them') {
      include("modules/quanlydanhmuc/them.php");
   } 
   else if ($tam == 'danhmuc' && $query == 'lietke') {
      include("modules/quanlydanhmuc/lietke.php");
   }
   elseif ($tam == 'danhmuc' && $query == 'sua') {
      include("modules/quanlydanhmuc/sua.php");
   } 
   elseif ($tam == 'sanpham' && $query == 'them') {
      include("modules/quanlysp/them.php");
   } 
   elseif ($tam == 'sanpham' && $query == 'lietke'){
      include("modules/quanlysp/lietke.php");
   }
   elseif ($tam == 'sanpham' && $query == 'sua') {
      include("modules/quanlysp/sua.php");
   } 
   elseif ($tam == 'quanlydonhang' && $query == 'lietke') {
      include("modules/quanlydonhang/lietke.php");
   } 
   elseif ($tam == 'donhang' && $query == 'xemdonhang') {
      include("modules/quanlydonhang/xemdonhang.php");
   } 
   elseif ($tam == 'baiviet' && $query == 'them') {
         include("modules/quanlybaiviet/them.php");
   } 
   elseif ($tam == 'baiviet' && $query == 'sua') {
      include("modules/quanlybaiviet/sua.php");
   } 
   elseif ($tam == 'baiviet' && $query == 'lietke') {
      include("modules/quanlybaiviet/lietke.php");
   }
   elseif ($tam == 'taikhoannguoidung' && $query == 'lietke') {
      include("modules/quanlytaikhoan/lietke.php");
   }
   elseif ($tam == 'quanlycmt' && $query == 'lietke') {
      include("modules/quanlycmt/lietke.php");
   }
   elseif ($tam == 'phanhoi' && $query == 'lietke') {
      include("modules/phanhoi/lietke.php");
   }
   elseif ($tam == 'add' && $query == 'them') {
      include("modules/themadmin/addadmin.php");
   }
   else {
      include("modules/dashboard.php");
   }
   ?>
</div>