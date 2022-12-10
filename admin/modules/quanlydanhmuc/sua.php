<?php
$sql_sua_danhmucsp = "SELECT * FROM gb_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">Sửa
    danh mục sản phẩm</p>
<table border="1" style="width: 60%;margin: 0 auto;font-family: Nunito;" class="table table-bordered">
    <form method="POST" action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
		while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
		?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" style="width: 100%;" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc">
            </td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" style="width: 100%;" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"
                    style="margin-left: 35%;background-color: #ee6477;color: #fff;border: none; outline: none; padding: 5px 15px;font-weight: 700;border-radius: 3px;"
                    name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
        <?php
		}
		?>
    </form>
</table>