<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
	$taikhoan = $_POST['username'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM gb_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1 ";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$_SESSION['dangnhap'] = $taikhoan;
		header("Location:index.php");
	} else {
		echo '<script>alert("Tài khoản hoặc mật khẩu sai!!");</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="style/dangky.css">
</head>

<body>
    <form action="" method="POST">
        <div class="container_contact">
            <div class="contact-box">
                <div class="right">
                    <h2>Đăng nhập Admin</h2>
                    <input type="username" class="field" name="username" placeholder="Tên đăng nhập">
                    <input type="password" class="field" name="password" placeholder="Mật khẩu">
                    <input type="submit" name="dangnhap" value="Đăng nhập " class="btn js-btn-dk"></input>
                </div>
            </div>
        </div>
    </form>
</body>

</html>