<div class="container-cart">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step done"> <span> <a href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i> Giỏ
                    Hàng</a></span> </div>
        <div class="step done"> <span><a href="index.php?quanly=vanchuyen"><i class="fa-solid fa-truck"></i> Vận
                    Chuyển</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=thongtinthantoan"><i
                        class="fa-solid fa-credit-card"></i>
                    Thanh Toán</a><span> </div>
        <div class="step"> <span><a href="index.php?quanly=donhangdadat"><i class="fa-solid fa-table-list"></i> Lịch Sử
                    Đơn Hàng</a><span> </div>
    </div>
</div>
<form action="pages/main/xulythanhtoan.php" method="POST">
    <div class=" thongtinthanhtoan-form">
        <div class="thongtinthanhtoan-form-left">
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
            <ul class="thongtinthanhtoan-form-left-list">
                <li class="thongtinthanhtoan-form-left-list-item">
                    Họ và tên vận chuyển: <b><?php echo $name ?></b>
                </li>
                <li class="thongtinthanhtoan-form-left-list-item">
                    Số điện thoại: <b><?php echo $phone ?></b>
                </li>
                <li class="thongtinthanhtoan-form-left-list-item">
                    Địa chỉ: <b><?php echo $address ?></b>
                </li>
                <li class="thongtinthanhtoan-form-left-list-item">
                    Ghi chú: <b><?php echo $note ?></b>
                </li>
            </ul>
            <!-- //todo giỏ hàng -->
            <div class="cart-form-2">
                <h3>Giỏ hàng của bạn</h3>
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
                        <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"
                                width="150px">
                        </td>
                        <td>
                            <?php echo $cart_item['soluong']; ?>
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
                    <?php
    }
    ?>
                </table>
            </div>
        </div>
        <div class="thongtinthanhtoan-form-right">
            <h2>Phương thước thanh toán</h2>
            <div class="thongtinthanhtoan-form-right-list">
                <p>
                    <input type="radio" id="test1" name="payment" value="tien mat" checked>
                    <label style="font-size: 18px;font-weight: 500" for="test1">Tiền mặt</label>
                </p>
                <p>
                    <input type="radio" id="test2" name="payment" value="chuyen khoan">
                    <label style="font-size: 18px;font-weight: 500" for="test2">Chuyển khoản</label>
                </p>
                <p>
                    <input type="radio" id="test3" name="payment" value="vnpay">
                    <label style="font-size: 18px;font-weight: 500" for="test3">
                        <img width="70px" src="././assets/img/logo-vnpay.png" alt="">
                        VNPay
                    </label>
                </p>
                <p class="tongtien">
                    Tổng tiền:
                    <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?>
                </p>
                <input type="submit" name="redirect" value="Thanh toán ngay" class="check">
            </div>
        </div>
    </div>
</form>

<form class="qrcode_momo" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
    action="pages/main/xulythanhtoanqrmomo.php">
    <input type="submit" name="momo" value="Thanh toán bằng MOMO QRcode">
</form>

<form class="atm_momo" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
    action="pages/main/xulythanhtoanmomoatm.php">
    <input type="submit" name="momo" value="Thanh toán bằng MOMO ATM">
</form>