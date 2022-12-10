<?php
$sql_sua_baiviet = "SELECT * FROM gb_baiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
$query_sua_baiviet = mysqli_query($mysqli, $sql_sua_baiviet);
?>
<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">Sửa
    bài viết</p>
<table b style="font-family: Nunito;width: 80%;margin: 0 auto;" class="table table-bordered">
    <?php
	while ($row = mysqli_fetch_array($query_sua_baiviet)) {
	?>
    <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>"
        enctype="multipart/form-data">
        <tr>
            <td>Tên bài viết</td>
            <td><input type="text" style="width: 100%;" value="<?php echo $row['tieude'] ?>" name="tieude"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="img_baiviet">
                <img src="modules/quanlybaiviet/img_post/<?php echo $row['img_baiviet'] ?>" width="250px">
            </td>

        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
        </tr>
        <tr>
            <td>Ngày Viết</td>
            <td><input type="date" value="" name="ngayviet"><?php echo $row['ngayviet'] ?></td>
        </tr>
        <tr>
            <td colspan="2"><input
                    style="background-color: #ee6477;color: #fff;border: none; outline: none; padding: 5px 15px;font-weight: 700;border-radius: 3px;"
                    type="submit" name="suabaiviet" value="Sửa bài viết"></td>
        </tr>
    </form>
    <?php
	}
	?>
</table>