<?php
$sql_lietke_baiviet = "SELECT * FROM gb_baiviet  ORDER BY id_baiviet ASC";
$query_lietke_baiviet = mysqli_query($mysqli, $sql_lietke_baiviet);
?>
<p style="font-family: Nunito;text-align: center;font-size: 30px;margin-top: 30px;color: #ee6477;font-weight: 900">Danh
    sách bài viết</p>
<table style="font-family: Nunito;width: 80%;margin: 0 auto;" class="table table-bordered">
    <thead class="" style="background-color: #ee6477; color:#fff;">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Tóm tắt</th>
            <th>Nội Dung</th>
            <th>Ngày viết</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <?php
	$i = 0;
	while ($row = mysqli_fetch_array($query_lietke_baiviet)) {
		$i++;
	?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tieude'] ?></td>
        <td><img src="modules/quanlybaiviet/img_post/<?php echo $row['img_baiviet'] ?>" width="250px"></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php echo $row['noidung'] ?></td>
        <td><?php echo $row['ngayviet'] ?></td>
        <td>
            <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>"><i
                    style="color :#ee6477" class="fa-solid fa-trash-can"></i></a> | <a
                href="?action=baiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>"><i style="color :#ee6477"
                    class="fas fa-edit"></i></a>
        </td>
    </tr>
    <?php
	}
	?>

</table>