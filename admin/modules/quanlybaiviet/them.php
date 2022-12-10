<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">Thêm
    bài viết</p>
<table class="table table-bordered" style="font-family: Nunito;width: 80%;margin: 0 auto;">
    <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tiêu đề</td>
            <td><input type="text" style="width: 100%;" name="tieude"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="img_baiviet"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Ngày viết</td>
            <td><input type="date" name="ngayviet"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"
                    style="background-color: #ee6477;color: #fff;border: none; outline: none; padding: 5px 15px;font-weight: 700;border-radius: 3px;"
                    name="thembaiviet" value="Thêm bài viết">
            </td>
        </tr>
    </form>
</table>