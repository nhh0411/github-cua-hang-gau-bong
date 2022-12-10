<?php
    $sql_desc = "SELECT * FROM gb_sanpham,gb_danhmuc WHERE gb_sanpham.id_danhmuc = gb_danhmuc.id_danhmuc AND gb_sanpham.id_sp = '$_GET[id]' LIMIT 1";
    $query_desc = mysqli_query($mysqli,$sql_desc);
?>
<?php
    $sql_pro_infor = "SELECT * FROM gb_sanpham,gb_danhmuc WHERE gb_sanpham.id_danhmuc = gb_danhmuc.id_danhmuc AND gb_sanpham.id_sp = '$_GET[id]' LIMIT 1";
    $query_pro_infor = mysqli_query($mysqli,$sql_pro_infor);
?>
<?php
    $sql_name_pro = "SELECT * FROM gb_sanpham,gb_danhmuc WHERE gb_sanpham.id_danhmuc = gb_danhmuc.id_danhmuc AND gb_sanpham.id_sp = '$_GET[id]' LIMIT 1";
    $query_name_pro = mysqli_query($mysqli,$sql_name_pro);
?>
<?php
    $sql_name_cate = "SELECT * FROM gb_danhmuc WHERE gb_danhmuc.id_danhmuc = '$_GET[iddm]' LIMIT 1";
    $query_name_cate = mysqli_query($mysqli,$sql_name_cate);
?>
<?php
    $sql_pro_similar = "SELECT * FROM gb_sanpham,gb_danhmuc WHERE gb_sanpham.id_danhmuc = gb_danhmuc.id_danhmuc AND gb_sanpham.id_danhmuc = '$_GET[iddm]' ORDER BY gb_sanpham.id_sp DESC LIMIT 4";
    $query_pro_similar = mysqli_query($mysqli,$sql_pro_similar);
?>
<div class="product-title">
    <a href="index.php" class="product-title-link">Trang chủ</a>
    <?php
    while($row_name_cate = mysqli_fetch_array($query_name_cate)){
    ?>
    <a href="index.php" class="product-title-link"> > <?php echo $row_name_cate['tendanhmuc'] ?></a>
    <?php
    }
    ?>
    <?php
    while($row_name_pro = mysqli_fetch_array($query_name_pro)){
    ?>
    <p class="product-title-text">
        > <?php echo $row_name_pro['tensp'] ?>
    </p>
    <?php
    }
    ?>
</div>
<!-- //todo support -->
<div style="margin-top: 15px"></div>
<div class="container-support">
    <div class="container-support-item">
        <img src="./assets/img/icon-1.png" alt="">
        <p>giao hàng tận nhà</p>
    </div>
    <div class="container-support-item">
        <img src="./assets/img/icon-2.png" alt="">
        <p>gói quà siêu đẹp</p>
    </div>
    <div class="container-support-item">
        <img src="./assets/img/icon-3.png" alt="">
        <p>cách giặt gấu bông</p>
    </div>
    <div class="container-support-item">
        <img src="./assets/img/icon-4.png" alt="">
        <p>bảo hàng gấu bông</p>
    </div>
</div>
<div class="product-form">
    <?php
    while($row_product_desc = mysqli_fetch_array($query_desc)){
    ?>
    <div class="product-form-heading">
        <div class="produc-form-heading-left">
            <img src="admin/modules/quanlysp/uploads/<?php echo $row_product_desc['hinhanh'] ?>" alt=""
                class="product-form-heading-left-img">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?id=<?php echo $row_product_desc['id_sp'] ?>">
            <div class="produc-form-heading-right">
                <div class="product-form-heading-right-title">
                    <?php echo $row_product_desc['tensp'] ?>
                </div>
                <div class="product-form-heading-right-price">
                    <?php echo number_format($row_product_desc['giasp'],0,'.','.')."đ" ?>
                </div>
                <input class="product-form-heading-right-cart" type="submit" name="themgiohang" value="thêm giỏ hàng">
                <div class="product-form-heading-right-infor">
                    <div class="product-form-heading-right-infor-left">
                        <p><i class="fa-solid fa-check"></i> Gói Quà - Nén Nhỏ Gấu - Tặng Thiệp Miễn Phí</p>
                        <p><i class="fa-solid fa-check"></i> Giao Hàng Toàn Quốc 2 - 5 Ngày - Nhận Hàng Mới Phải Trả
                            Tiền</p>
                        <p><i class="fa-solid fa-check"></i> Dịch Vụ Giặt Gấu & Vệ Sinh Gấu Tại Nhà Giá Rẻ</p>
                    </div>
                    <div class="product-form-heading-right-infor-right">
                        <p><i class="fa-solid fa-check"></i> Giao Hàng Nội Thành Siêu Tốc - Giao Đúng Giờ & Tận Tay</p>
                        <p><i class="fa-solid fa-check"></i> Bảo Hành Đường Chỉ Vĩnh Viễn - Bảo Hành Bông Gấu 1 năm</p>
                        <p><i class="fa-solid fa-check"></i> Địa Chỉ Shop Dễ Tìm - Có Chỗ Để Xe Ô Tô Miễn Phí</p>
                    </div>
                </div>
                <div class="product-form-heading-right-location">
                    <p><i class="fa-solid fa-location-dot"></i> Trường đại học Điện Lực - 0867699706</p>
                </div>
            </div>
        </form>
    </div>
    <div class="product-form-body">
        <div class="container-similar-cmt">
            <div class="cmt-container">
                <!--//todo tab item -->
                <div class="tabs">
                    <div class="tabs-item active">
                        <i class="tab-icon fa-solid fa-circle-info"></i>
                        Thông tin sản phẩm
                    </div>
                    <div class="tabs-item">
                        <i class="tab-icon fa-solid fa-receipt"></i>
                        Hướng dẫn mua hàng
                    </div>
                    <div class="tabs-item">
                        <i class="tab-icon fa-solid fa-face-grin-hearts"></i>
                        Dịch vụ đi kèm
                    </div>
                    <div class="line"></div>
                </div>
                <!-- //todo tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <h2>Thông tin sản phẩm</h2>
                        <div class="tab-pane-promotion">
                            <?php
                            while ($row_pro_infor= mysqli_fetch_array($query_pro_infor)){
                            ?>
                            <p>
                                <?php echo $row_pro_infor['mota'] ?>
                            </p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <h2>Hướng dẫn mua hàng</h2>
                        <img width="100%" style="margin-top: 15px;box-shadow: 0 2px 9px 0 rgba(0,0,0,0.1)"
                            src="././assets/img/huong-dan-mua-hang.jpg" alt="hướng dẫn mua hàng">
                    </div>
                    <div class="tab-pane">
                        <h2>6 Lý do để mua hàng</h2>
                        <ul class="tab-pane-list" style="font-size:14px;margin-top:15px;color: #ee6477">
                            <li style="padding: 0 0 5px 20px;" class="tab-pane-item">
                                GÓI QUÀ – NÉN NHỎ GẤU – TẶNG THIỆP MIỄN PHÍ
                            </li>
                            <li style="padding: 0 0 5px 20px;" class="tab-pane-item">
                                GIAO HÀNG NỘI THÀNH SIÊU TỐC – GIAO ĐÚNG GIỜ & TẬN TAY
                            </li>
                            <li style="padding: 0 0 5px 20px;" class="tab-pane-item">
                                GIAO HÀNG TOÀN QUỐC 2-5 NGÀY – NHẬN HÀNG MỚI PHẢI TRẢ TIỀN
                            </li>
                            <li style="padding: 0 0 5px 20px;" class="tab-pane-item">
                                BẢO HÀNH ĐƯỜNG CHỈ VĨNH VIỄN – BẢO HÀNH BÔNG GẤU 1 NĂM
                            </li>
                            <li style="padding: 0 0 5px 20px;" class="tab-pane-item">
                                DỊCH VỤ GIẶT GẤU VÀ VỆ SINH GẤU TẠI NHÀ GIÁ RẺ
                            </li>
                            <li style="padding: 0 0 5px 20px;" class="tab-pane-item">
                                ĐỊA CHỈ SHOP DỄ TÌM – CÓ CHỖ ĐỂ XE MIỄN PHÍ
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="product-form-footer">
        <h2>Sản Phẩm Tương Tự</h2>
        <div class="product-form-footer-body">
            <?php
            while ($row_pro_similar = mysqli_fetch_array($query_pro_similar)){
            ?>
            <div class="product-item">
                <div class="product-item-img">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_similar['hinhanh']?>" alt="sản phẩm">
                </div>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_similar['id_sp'] ?>&iddm=<?php echo $row_pro_similar['id_danhmuc'] ?>"
                    class="product-item-title"><?php echo $row_pro_similar['tensp'] ?></a>
                <p class="product-item-price">
                    <?php echo number_format($row_pro_similar['giasp'],0,',','.'). 'đ' ?>
                </p>
                <a class="product-item-quick-view"
                    href="index.php?quanly=sanpham&id=<?php echo $row_pro_similar['id_sp'] ?>&iddm=<?php echo $row_pro_similar['id_danhmuc'] ?>">Xem
                    Chi Tiết</a>
                <div class="product-item-footer">
                    <input type="submit" value="Thêm Giỏ Hàng">
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<script>
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$('.tabs-item');
const panes = $$('.tab-pane');

const tabActive = $('.tabs-item.active');
const line = $('.tabs .line');

tabs.forEach((tab, index) => {
    const pane = panes[index]

    tab.onclick = function() {
        $('.tabs-item.active').classList.remove("active");
        $('.tab-pane.active').classList.remove("active");

        line.style.left = this.offsetLeft + 'px';
        line.style.width = this.offsetWidth + 'px';

        this.classList.add("active");
        pane.classList.add("active");
    }
})
</script>