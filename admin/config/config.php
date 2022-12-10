<?php
    $mysqli = new mysqli("localhost","root","","gaubong_shop");
    //todo check connection
    if($mysqli->connect_error){
        echo "Kết nối lỗi" . $mysqli->connect_error;
        exit();
    }
?>