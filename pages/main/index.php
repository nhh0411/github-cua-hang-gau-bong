<?php
$sql_product_1 = "SELECT * FROM gb_danhmuc,gb_sanpham WHERE gb_danhmuc.id_danhmuc = gb_sanpham.id_danhmuc AND gb_sanpham.id_danhmuc = '3' ORDER BY gb_sanpham.id_sp ASC LIMIT 4";
$query_product_1 = mysqli_query($mysqli, $sql_product_1);
?>
<?php
$sql_product_2 = "SELECT * FROM gb_danhmuc,gb_sanpham WHERE gb_danhmuc.id_danhmuc = gb_sanpham.id_danhmuc AND gb_sanpham.id_danhmuc = '4' ORDER BY gb_sanpham.id_sp ASC LIMIT 4";
$query_product_2 = mysqli_query($mysqli, $sql_product_2);
?>
<?php
$sql_product_3 = "SELECT * FROM gb_danhmuc,gb_sanpham WHERE gb_danhmuc.id_danhmuc = gb_sanpham.id_danhmuc AND gb_sanpham.id_danhmuc = '5' ORDER BY gb_sanpham.id_sp ASC LIMIT 4";
$query_product_3 = mysqli_query($mysqli, $sql_product_3);
?>
<?php
$sql_product_4 = "SELECT * FROM gb_danhmuc,gb_sanpham WHERE gb_danhmuc.id_danhmuc = gb_sanpham.id_danhmuc AND gb_sanpham.id_danhmuc = '6' ORDER BY gb_sanpham.id_sp ASC LIMIT 4";
$query_product_4 = mysqli_query($mysqli, $sql_product_4);
?>
<?php
$sql_product_5 = "SELECT * FROM gb_danhmuc,gb_sanpham WHERE gb_danhmuc.id_danhmuc = gb_sanpham.id_danhmuc AND gb_sanpham.id_danhmuc = '7' ORDER BY gb_sanpham.id_sp ASC LIMIT 4";
$query_product_5 = mysqli_query($mysqli, $sql_product_5);
?>
<?php
$sql_post = "SELECT * FROM gb_baiviet ORDER BY id_baiviet ASC";
$query_post = mysqli_query($mysqli, $sql_post);
?>
<!-- //TODO slider -->
<div class="container-slider">
    <img src="./assets/img/slider-4.jpg" alt="" class="img-slider-item">
    <img src="./assets/img/slider-3.jpg" alt="" class="img-slider-item">
    <img src="./assets/img/slider-2.jpg" alt="" class="img-slider-item">
</div>
<!-- //TODO img -->
<div class="container-img">
    <div class="container-img-item">
        <img src="./assets/img/container-img-1.jpg" alt="">
    </div>
    <div class="container-img-item">
        <img src="./assets/img/container-img-2.jpg" alt="">
    </div>
</div>
<!-- //TODO support -->
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
<!-- //TODO product frist -->
<div class="container-product-frist">
    <div class="container-product-frist-heading">
        <p>gấu bông to</p>
    </div>
    <div class="container-product-frist-body">
        <?php
        while($row_product_1 = mysqli_fetch_array($query_product_1)){
        ?>
        <div class="product-item">
            <div class="product-item-img">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_product_1['hinhanh'] ?>" alt="sản phẩm">
            </div>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_product_1['id_sp']?>&iddm=<?php echo $row_product_1['id_danhmuc'] ?> "
                class="product-item-title"><?php echo $row_product_1['tensp'] ?></a>
            <p class="product-item-price"><?php echo number_format($row_product_1['giasp'],0,',','.'). 'đ' ?></p>
            <a class="product-item-quick-view"
                href="index.php?quanly=sanpham&id=<?php echo $row_product_1['id_sp']?>&iddm=<?php echo $row_product_1['id_danhmuc'] ?>">Xem
                Chi Tiết</a>
            <div class="product-item-footer">
                <input type="submit" value="Thêm Giỏ Hàng">
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="container-product-frist-footer">
        <a href="#">
            xem tất cả gấu bông to
        </a>
    </div>
</div>
<!-- //TODO product secord -->
<div class="container-product-secord">
    <div class="container-product-secord-heading">
        <p>hàng mới về</p>
    </div>
    <div class="container-product-secord-body">
        <?php
        while($row_product_2 = mysqli_fetch_array($query_product_2)){
        ?>
        <div class="product-item">
            <div class="product-item-img">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_product_2['hinhanh'] ?>" alt="sản phẩm">
            </div>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_product_2['id_sp'] ?>&iddm=<?php echo $row_product_2['id_danhmuc'] ?>"
                class="product-item-title"><?php echo $row_product_2['tensp'] ?></a>
            <p class="product-item-price"><?php echo number_format($row_product_2['giasp'],0,',','.'). 'đ' ?></p>
            <a class="product-item-quick-view"
                href="index.php?quanly=sanpham&id=<?php echo $row_product_2['id_sp']?>&iddm=<?php echo $row_product_2['id_danhmuc'] ?>">Xem
                Chi Tiết</a>
            <div class="product-item-footer">
                <input type="submit" value="Thêm Giỏ Hàng">
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="container-product-secord-footer">
        <a href="#">
            xem tất cả hàng mới về
        </a>
    </div>
</div>
<!-- //TODO product third -->
<div class="container-product-third">
    <div class="container-product-third-heading">
        <p>gấu bông hot trend</p>
    </div>
    <div class="container-product-third-body">
        <?php
        while($row_product_3 = mysqli_fetch_array($query_product_3)){
        ?>
        <div class="product-item">
            <div class="product-item-img">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_product_3['hinhanh'] ?>" alt="sản phẩm">
            </div>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_product_3['id_sp'] ?>&iddm=<?php echo $row_product_3['id_danhmuc'] ?>"
                class="product-item-title"><?php echo $row_product_3['tensp'] ?></a>
            <p class="product-item-price"><?php echo number_format($row_product_3['giasp'],0,',','.'). 'đ' ?></p>
            <a class="product-item-quick-view"
                href="index.php?quanly=sanpham&id=<?php echo $row_product_3['id_sp']?>&iddm=<?php echo $row_product_3['id_danhmuc'] ?>">Xem
                Chi Tiết</a>
            <div class="product-item-footer">
                <input type="submit" value="Thêm Giỏ Hàng">
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="container-product-third-footer">
        <a href="#">
            xem tất cả gấu bông hot trend
        </a>
    </div>
</div>
<!-- //TODO product four -->
<div class="container-product-four">
    <div class="container-product-third-heading">
        <p>thú nhồi bông</p>
    </div>
    <div class="container-product-third-body">
        <?php
        while ($row_product_4 = mysqli_fetch_array($query_product_4)){
        ?>
        <div class="product-item">
            <div class="product-item-img">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_product_4['hinhanh'] ?>" alt="sản phẩm">
            </div>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_product_4['id_sp'] ?>&iddm=<?php echo $row_product_4['id_danhmuc'] ?>"
                class="product-item-title"><?php echo $row_product_4['tensp'] ?></a>
            <p class="product-item-price"><?php echo number_format($row_product_4['giasp'],0,',','.'). 'đ' ?></p>
            <a class="product-item-quick-view"
                href="index.php?quanly=sanpham&id=<?php echo $row_product_4['id_sp']?>&iddm=<?php echo $row_product_4['id_danhmuc'] ?>">Xem
                Chi Tiết</a>
            <div class="product-item-footer">
                <input type="submit" value="Thêm Giỏ Hàng">
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="container-product-third-footer">
        <a href="#">
            xem tất cả thú nhồi bông
        </a>
    </div>
</div>
<!-- //TODO product five -->
<div class="container-product-five">
    <div class="container-product-five-heading">
        <p>khủng long bông</p>
    </div>
    <div class="container-product-five-body">
        <?php
        while($row_product_5 = mysqli_fetch_array($query_product_5)){
        ?>
        <div class="product-item">
            <div class="product-item-img">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_product_5['hinhanh'] ?>" alt="sản phẩm">
            </div>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_product_5['id_sp'] ?>&iddm=<?php echo $row_product_5['id_danhmuc'] ?>"
                class="product-item-title"><?php echo $row_product_5['tensp'] ?></a>
            <p class="product-item-price"><?php echo number_format($row_product_5['giasp'],0,',','.'). 'đ' ?></p>
            <a class="product-item-quick-view"
                href="index.php?quanly=sanpham&id=<?php echo $row_product_5['id_sp']?>&iddm=<?php echo $row_product_5['id_danhmuc'] ?>">Xem
                Chi Tiết</a>
            <div class="product-item-footer">
                <input type="submit" value="Thêm Giỏ Hàng">
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="container-product-five-footer">
        <a href="#">
            xem tất cả khủng long bông
        </a>
    </div>
</div>
<!-- //TODO blog -->
<div class="container-blog">
    <div class="container-blog-heading">
        <p>câu chuyện gấu bông</p>
    </div>
    <div class="container-blog-body">
        <?php
        while($row_post = mysqli_fetch_array($query_post)){
        ?>
        <div class="blog-item">
            <img src="admin/modules/quanlybaiviet/img_post/<?php echo $row_post['img_baiviet'] ?>" alt="bài viết"
                class="blog-item-img">
            <div class="blog-item-content">
                <a
                    href="index.php?quanly=baiviet&id=<?php echo $row_post['id_baiviet'] ?>"><?php echo $row_post['tieude'] ?></a>
                <p><?php echo $row_post['tomtat'] ?></p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="container-blog-footer">
        <a href="#">xem thêm</a>
    </div>
</div>
<!-- //TODO videos -->
<div class="container-video">
    <div class="container-video-heading">
        <p>video nhà gấu</p>
    </div>
    <div class="container-video-body">
        <div class="video-item">
            <iframe width="400" height="380" src="https://www.youtube.com/embed/Pt3w4Hy6TZM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <p>Trọn Bộ Quà Tặng Yêu Thương</p>
        </div>
        <div class="video-item">
            <iframe width="400" height="380" src="https://www.youtube.com/embed/hndrG7q7OB0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <p>Ưu Đãi Mê Ly</p>
        </div>
        <div class="video-item">
            <iframe width="400" height="380" src="https://www.youtube.com/embed/Exjr0u7zCfQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <p>Shop Gấu Bông Teddy</p>
        </div>
    </div>
    <div class="container-video-footer">
        <a href="#">xem thêm</a>
    </div>
</div>