<?php
$sql_name_cate = "SELECT * FROM gb_danhmuc WHERE id_danhmuc = '$_GET[id]' LIMIT 1";
$query_name_cate = mysqli_query($mysqli,$sql_name_cate);
?>
<?php
$sql_pro_cate = "SELECT * FROM gb_danhmuc,gb_sanpham WHERE gb_danhmuc.id_danhmuc = gb_sanpham.id_danhmuc AND gb_danhmuc.id_danhmuc = '$_GET[id]' ORDER BY gb_sanpham.id_danhmuc ASC";
$query_pro_cate = mysqli_query($mysqli,$sql_pro_cate)
?>
<?php
$sql_post = "SELECT * FROM gb_baiviet ORDER BY id_baiviet ASC";
$query_post = mysqli_query($mysqli, $sql_post);
?>
<div class="category-title">
    <a href="index.php" class="category-title-link">Trang chủ</a>
    <?php
    while ($row_name_cate = mysqli_fetch_array($query_name_cate)){
    ?>
    <p class="category-link-text"> > <?php echo $row_name_cate['tendanhmuc'] ?></p>
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
<!-- //todo category product -->
<div class="category-form">
    <div class="category-form-body">
        <?php
        while ($row_pro_cate = mysqli_fetch_array($query_pro_cate)){
        ?>
        <div class="product-item">
            <div class="product-item-img">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_cate['hinhanh']?>" alt="sản phẩm">
            </div>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_cate['id_sp'] ?>&iddm=<?php echo $row_pro_cate['id_danhmuc'] ?>"
                class="product-item-title"><?php echo $row_pro_cate['tensp'] ?></a>
            <p class="product-item-price">
                <?php echo number_format($row_pro_cate['giasp'],0,',','.'). 'đ' ?>
            </p>
            <a class="product-item-quick-view"
                href="index.php?quanly=sanpham&id=<?php echo $row_pro_cate['id_sp'] ?>&iddm=<?php echo $row_pro_cate['id_danhmuc'] ?>">Xem
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
                <a href="#"><?php echo $row_post['tieude'] ?></a>
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
<!-- //todo videos -->
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