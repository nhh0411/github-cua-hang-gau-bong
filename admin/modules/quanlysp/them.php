<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">Thêm
    sản phẩm</p>
<table border="1" style="font-family: Nunito;width: 80%; margin: 0 auto;" class="table table-bordered">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input style="width: 100%;" type="text" name="tensp"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input style="width: 100%;" type="text" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input style="width: 100%;" type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>mô tả</td>
            <td><textarea rows="10" cols="50" name="mota" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
					$sql_danhmuc = "SELECT * FROM gb_danhmuc ORDER BY id_danhmuc ASC";
					$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
					while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
					?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?>
                    </option>
                    <?php
					}
					?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input
                    style="background-color: #ee6477;color: #fff;border: none; outline: none; padding: 5px 15px;font-weight: 700;border-radius: 3px;"
                    type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>