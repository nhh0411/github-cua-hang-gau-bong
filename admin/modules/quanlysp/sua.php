<?php
$sql_sua_sp = "SELECT * FROM gb_sanpham WHERE id_sp='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">Sửa
    sản phẩm</p>
<table style="font-family: Nunito;width: 90%;margin: 0 auto;" class="table table-bordered">
    <?php
	while ($row = mysqli_fetch_array($query_sua_sp)) {
	?>
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sp'] ?>"
        enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input style="width: 100%;" type="text" value="<?php echo $row['tensp'] ?>" name="tensp"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input style="width: 100%;" type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input style="width: 100%;" type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
            </td>

        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea rows="10" cols="50" name="mota" style="resize: none;"><?php echo $row['mota'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
						$sql_danhmuc = "SELECT * FROM gb_danhmuc ORDER BY id_danhmuc ASC";
						$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
						while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
							if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
						?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                        <?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
							} else {
							?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?>
                    </option>
                    <?php
							}
						}
						?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <?php
						if ($row['tinhtrang'] == 1) {
						?>
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                    <?php
						} else {
						?>
                    <option value="1">Kích hoạt</option>
                    <option value="0" selected>Ẩn</option>
                    <?php
						}
						?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input
                    style="background-color: #ee6477;color: #fff;border: none; outline: none; padding: 5px 15px;font-weight: 700;border-radius: 3px;"
                    type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </tr>
    </form>
    <?php
	}
	?>
</table>