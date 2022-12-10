<div class="container-cart">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step current"> <span> <a href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i>
                    Giỏ Hàng</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=vanchuyen"><i class="fa-solid fa-truck"></i> Vận
                    Chuyển</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan"><i class="fa-solid fa-credit-card"></i>
                    Thanh
                    Toán</a><span> </div>
        <div class="step"> <span><a href="index.php?quanly=donhangdadat"><i class="fa-solid fa-table-list"></i> Lịch Sử
                    Đơn Hàng</a><span> </div>
    </div>
</div>
<div class="cart-form">
    <h2>Giỏ Hàng</h2>
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
                <th>Quản Lý</th>
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
            <td>
                <a style="text-decoration: none;color: #fff;padding: 2px 10px; background-color:#ee6477;border-radius: 2px;"
                    href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">
                    Xóa
                </a>
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
                <p style="float: right;">
                    <a style="color: #fff; text-decoration: none;font-size: 18px;font-weight: normal;background-color: #ee6477;border-radius: 2px;border: none; padding: 5px 10px;"
                        href="pages/main/themgiohang.php?xoatatca=1">
                        Xóa tất cả
                    </a>
                </p>
                <div style="clear:both;"></div>
                <?php
                if (isset($_SESSION['dangky'])) {
                ?>
                <p style="text-align:center">
                    <a style="font-weight: normal;text-decoration: none;padding: 5px 10px; background-color:#ee6477;color:#fff;font-size: 18px;"
                        href="index.php?quanly=vanchuyen">
                        Hình thức vận chuyển
                    </a>
                </p>
                <?php
                } else {
                ?>
                <p style="text-align:center">
                    <a style="font-weight: normal;text-decoration: none;padding: 5px 10px; background-color:#ee6477;color:#fff;font-size: 18px;"
                        href="dangky.php">
                        Đăng ký đặt hàng
                    </a>
                </p>
                <?php
                }
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</div>