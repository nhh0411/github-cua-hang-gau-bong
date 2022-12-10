<?php
    $sql_danhmuc = "SELECT * FROM gb_danhmuc ORDER BY id_danhmuc ASC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1)
   unset($_SESSION['dangky']);
?>
<!-- //todo nav menu -->
<div class="navmenu js-navmenu">
    <div class="navmenu-items">
        <a href="index.php" class="navmenu-items-link">Trang chủ</a>
    </div>
    <div class="navmenu-items dad">
        <a href="#" class="navmenu-items-link">Danh mục
            <i class="fa-solid fa-angle-down"></i>
        </a>
        <ul class="navmenu-list-chill">
            <?php
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <li class="navmenu-items-chill">
                <a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"
                    class="navmenu-items-chill-link">
                    <?php echo $row_danhmuc['tendanhmuc'] ?>
                </a>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class="navmenu-items">
        <a href="index.php?quanly=giohang" class="navmenu-items-link">Giỏ hàng</a>
    </div>
    <div class="navmenu-items">
        <a href="#" class="navmenu-items-link">Blog</a>
    </div>
    <div class="navmenu-items">
        <a href="#" class="navmenu-items-link">Liên hệ</a>
    </div>
    <div class="navmenu-items">
        <a href="#" class="navmenu-items-link">Tin về gấu teddy</a>
    </div>
    <?php
    if(isset($_SESSION['dangky'])){
    ?>
    <div class="navmenu-items">
        <a href="index.php?dangxuat=1" class="navmenu-items-link">Đăng Xuất</a>
    </div>
    <?php
    } else{
    ?>
    <div class="navmenu-items">
        <a href="dangnhap.php" class="navmenu-items-link">Đăng Nhập</a>
    </div>
    <?php
    }
    ?>
</div>