<?php
include('../../config/config.php');

$tenloaisp=$_POST['tendanhmuc'];
$thutu=$_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
	//them
	$sql_them = "INSERT INTO gb_danhmuc (tendanhmuc,thutu) VALUES('".$tenloaisp."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=danhmuc&query=them');
}elseif(isset($_POST['suadanhmuc'])){
	//sua
	$sql_update = "UPDATE gb_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=danhmuc&query=lietke');
}else{
	$id=$_GET['iddanhmuc'];  
	$sql_xoa = "DELETE FROM gb_danhmuc WHERE id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=danhmuc&query=lietke');
}
?>