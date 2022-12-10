<?php
$sql_lietke_sp = "SELECT * FROM gb_sanpham,gb_danhmuc WHERE gb_sanpham.id_danhmuc=gb_danhmuc.id_danhmuc ORDER BY id_sp DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">Danh
    sách sản phẩm</p>
<table style="font-family: Nunito;width: 90%; margin: 0 auto;" class="table table-bordered table-hover">
    <thead class="" style="background-color: #ee6477; color:#fff;">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Danh mục</th>
            <th>Mã sản phẩm</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <?php
	$i = 0;
	while ($row = mysqli_fetch_array($query_lietke_sp)) {
		$i++;
	?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
        <td><?php echo number_format($row['giasp'],0,',','.'). 'đ' ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['mota'] ?></td>
        <td><?php if ($row['tinhtrang'] == 1) {
					echo 'kích hoạt';
				} else {
					echo 'ẩn';
				} ?>
        </td>
        <td>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sp'] ?>"><i style="color: #ee6477;"
                    class="fa-solid fa-trash-can"></i></a> | <a
                href="?action=sanpham&query=sua&idsanpham=<?php echo $row['id_sp'] ?>"><i style="color: #ee6477"
                    class="fas fa-edit"></i></a>
        </td>
    </tr>
    <?php
	}
	?>

</table>