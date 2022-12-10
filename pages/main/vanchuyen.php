<div class="container-cart">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step done"> <span> <a href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i> Giỏ
                    Hàng</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=vanchuyen"><i class="fa-solid fa-truck"></i> Vận
                    Chuyển</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan"><i class="fa-solid fa-credit-card"></i>
                    Thanh
                    Toán</a><span> </div>
        <div class="step"> <span><a href="index.php?quanly=donhangdadat"><i class="fa-solid fa-table-list"></i> Lịch Sử
                    Đơn Hàng</a><span> </div>
    </div>
</div>
<?php
    if(isset($_POST['themvanchuyen'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $id_dangky = $_SESSION['id_khachhang'];
        $sql_them_vanchuyen =mysqli_query($mysqli,"INSERT INTO gb_shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");
        if($sql_them_vanchuyen){
            echo '<script>alert("Thêm vận chuyển thành công");</script>';
        }
    }elseif(isset($_POST['capnhatvanchuyen'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $id_dangky = $_SESSION['id_khachhang'];
        $sql_update_vanchuyen =mysqli_query($mysqli,"UPDATE gb_shipping SET name = '$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
        if($sql_update_vanchuyen){
            echo '<script>alert("Cập nhật vận chuyển thành công");</script>';
        }
    }
?>
<div class="vanchuyen-form">
    <h2>Thông tin vận chuyển</h2>
    <?php
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM gb_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
    $count = mysqli_num_rows($sql_get_vanchuyen);
    if($count > 0){
        $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        $name = $row_get_vanchuyen['name'];
        $phone = $row_get_vanchuyen['phone'];
        $address = $row_get_vanchuyen['address'];
        $note = $row_get_vanchuyen['note'];
    }else{
        $name = "";
        $phone = "";
        $address = "";
        $note = "";
    }
    ?>
    <form action="" autocomplete="off" method="POST">
        <label for="fname">Họ Và Tên</label>
        <input type="text" name="name" value="<?php echo $name ?>" placeholder="...">

        <label for="lname">Số Điện Thoại</label>
        <input type="text" name="phone" value="<?php echo $phone ?>" placeholder="...">

        <label for="country">Địa Chỉ</label>
        <input type="text" name="address" value="<?php echo $address ?>" placeholder="...">

        <label for="country">Ghi Chú</label>
        <input type="text" name="note" value="<?php echo $note ?>" placeholder="...">
        <?php
        if($name == ''&& $phone == ''){
        ?>
        <input name="themvanchuyen" type="submit" value="Thêm vận chuyển">
        <?php
        }elseif($name != ''&& $phone != ''){
        ?>
        <input name="capnhatvanchuyen" type="submit" value="Cập nhật vận chuyển">
        <?php
        }
        ?>
    </form>
</div>
<!-- //todo giỏ hàng -->
<div class="cart-form">
    <table class="table-cart">
        <thead class="">
            <tr>
                <th>ID</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá sản phẩm</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <?php
    if (isset($_SESSION['cart'])) {
      $i = 0;
      $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;
        ?>
        <tr class="table-hover">
            <td><?php echo $i; ?></td>
            <td><?php echo $cart_item['masp']; ?></td>
            <td><?php echo $cart_item['tensp']; ?></td>
            <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
            <td>
                <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
                    <i style="color:#ee6477;" class="fas fa-plus-circle"></i>
                </a>
                <?php echo $cart_item['soluong']; ?>
                <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
                    <i style="color:#ee6477;" class="fas fa-minus-circle"></i>
                </a>
            </td>
            <td>
                <?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'vnđ'; ?>
            </td>
            <td>
                <?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?>
            </td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="8">
                <p style="float: left; font-weight: 700;font-size: 20px;color:#3e5483;">
                    Tổng tiền:
                    <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?>
                </p>
                <div style="clear:both;"></div>
                <p style="text-align:center">
                    <a style="font-weight: normal;text-decoration: none;padding: 5px 10px; background-color:#ee6477;color:#fff;font-size: 18px;"
                        href="index.php?quanly=thongtinthanhtoan">
                        Hình thức thanh toán
                    </a>
                </p>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</div>