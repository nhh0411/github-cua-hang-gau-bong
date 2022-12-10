<?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = "";
    }
    if($tam == "danhmuc"){
        include("main/danhmuc.php");
    }
    elseif($tam == "sanpham"){
        include("main/sanpham.php");
    }
    elseif($tam == "baiviet"){
        include("main/baiviet.php");
    }
    elseif($tam == "giohang"){
        include("main/giohang.php");
    }
    elseif($tam == "vanchuyen"){
        include("main/vanchuyen.php");
    }
    elseif($tam == "thongtinthanhtoan"){
        include("main/thongtinthanhtoan.php");
    }
    elseif($tam == "donhangdadat"){
        include("main/donhangdadat.php");
    }
    elseif($tam == "camon"){
        include("main/camon.php");
    }
    else{
        include("main/index.php");
    }
?>