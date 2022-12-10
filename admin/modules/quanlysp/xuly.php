<?php
include('../../config/config.php');

$tensanpham =$_POST['tensp'];
$masp=$_POST['masp'];
$giasp=$_POST['giasp'];
//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$mota=$_POST['mota'];
$tinhtrang=$_POST['tinhtrang'];
$danhmuc=$_POST['danhmuc'];


if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO gb_sanpham(tensp,masp,giasp,hinhanh,mota,tinhtrang,id_danhmuc) VALUES('".$tensanpham."','".$masp."','".$giasp."','".$hinhanh."','".$mota."','".$tinhtrang."','".$danhmuc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=sanpham&query=them');
}elseif(isset($_POST['suasanpham'])){
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		//xoa hinh anh cu
		$sql = "SELECT * FROM gb_sanpham WHERE id_sp = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
		$sql_update = "UPDATE gb_sanpham SET tensp='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',hinhanh='".$hinhanh."',mota='".$mota."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sp='$_GET[idsanpham]'";
	}else{
		$sql_update = "UPDATE gb_sanpham SET tensp='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',mota='".$mota."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sp='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=sanpham&query=lietke');
}else{	
	$id=$_GET['idsanpham'];  
	$sql = "SELECT * FROM gb_sanpham WHERE id_sp = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM gb_sanpham WHERE id_sp='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=sanpham&query=lietke');
}
?>