<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
  unset($_SESSION['dangnhap']);
  header('Location:login.php');
}
?>
<div style="font-family: Nunito" class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Trang chủ</a>
            </li>
        </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside style="background-color: #333" class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <span class="brand-text font-weight-bolder">Trang Quản Trị</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="./Public/admin/dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a style="color: #fff;text-transform: uppercase;font-weight:700;" href="../index.php"
                        class="d-block">Gấu Bông
                        Shop</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a style="background-color: #ee6477;" href="index.php" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Trang chủ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-book-open"></i>
                            <p>
                                Quản lý danh mục
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=danhmuc&query=them" class="nav-link">
                                    <i class="fa-solid fa-square-plus nav-icon"></i>
                                    <p>Thêm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?action=danhmuc&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-desktop"></i>
                            <p>
                                Quản lý sản phẩm
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=sanpham&query=them" class="nav-link">
                                    <i class="fa-solid fa-square-plus nav-icon"></i>
                                    <p>Thêm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?action=sanpham&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-book"></i>
                            <p>
                                Quản lý bài viết
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=baiviet&query=them" class="nav-link">
                                    <i class="fa-solid fa-square-plus nav-icon"></i>
                                    <p>Thêm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?action=baiviet&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-box-open"></i>
                            <p>
                                Quản lý đơn hàng
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=quanlydonhang&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-user-plus"></i>
                            <p>
                                Quản lý tài khoản
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=taikhoannguoidung&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Tài khoản Khách hàng</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-comment"></i>
                            <p>
                                Quản lý đánh giá
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=quanlycmt&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-comment"></i>
                            <p>
                                Ý kiến phản hồi
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=phanhoi&query=lietke" class="nav-link">
                                    <i class="fa-solid fa-file-lines nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i style="color: #ee6477" class="nav-icon fa-solid fa-user-plus"></i>
                            <p>
                                Thêm (Admin)
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?action=add&query=them" class="nav-link">
                                    <i class="fa-solid fa-square-plus nav-icon"></i>
                                    <p>Thêm</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="index.php?dangxuat=1" class="nav-link">
                            <i style="color: #ee6477" class="fa-solid fa-arrow-right-from-bracket nav-icon"></i>
                            <p>
                                Đăng xuất: <?php if (isset($_SESSION['dangnhap'])) {
                                echo $_SESSION['dangnhap'];
                                } ?>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>