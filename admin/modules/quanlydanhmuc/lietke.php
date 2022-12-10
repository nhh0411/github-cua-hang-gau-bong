<?php
$sql_lietke_danhmucsp = "SELECT * FROM gb_danhmuc ORDER BY thutu ASC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<p style="font-family: Nunito;text-align: center;font-size: 30px;margin-top: 30px;color: #ee6477;font-weight: 900">
    Danh sách danh mục
    sản phẩm</p>
<table style="width: 90%; margin: 0 auto;font-family: Nunito;" class="table table-bordered table-hover">
    <thead class="" style="background-color: #ee6477; color:#fff;">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <?php
	$i = 0;
	while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
		$i++;
	?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a style="margin-right: 5px;"
                href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i
                    style="color :#ee6477" class="fa-solid fa-trash-can"></i></a> | <a style="margin-left:5px"
                href="?action=danhmuc&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i style="color :#ee6477"
                    class="fas fa-edit"></i></a>
        </td>
    </tr>
    <?php
	}
	?>

</table>