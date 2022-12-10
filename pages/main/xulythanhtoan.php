<?php
session_start();
use Carbon\Carbon;
include('../../admin/config/config.php');
require('../../Carbon/autoload.php');
require_once('config_vnpay.php');

$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);
$cart_payment = $_POST['payment'];

//todo lấy thông tin vận chuyển
$id_dangky = $_SESSION['id_khachhang'];
$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM gb_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['id_shipping'];

if($cart_payment == 'tienmat' || $cart_payment == 'chuyenkhoan'){
	//todo insert cart
	$insert_cart = "INSERT INTO gb_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping) VALUE ('" . $id_khachhang . "','" . $code_order . "',1,'" . $now . "','".$cart_payment."','".$id_shipping."')";
	$cart_query = mysqli_query($mysqli, $insert_cart);
	//todo them gio hang chi tiet
	foreach ($_SESSION['cart'] as $key => $value) {
		$id_sanpham = $value['id'];
		$soluong = $value['soluong'];
		$insert_order_details = "INSERT INTO gb_cart_details(id_sp,code_cart,soluongmua) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "')";
		mysqli_query($mysqli, $insert_order_details);
	}
}elseif($cart_payment == 'vnpay'){
	//todo thanh toan bang vnpay
	$vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
	$vnp_OrderInfo = 'Thanh toán đơn hàng đặt tại web';
	$vnp_OrderType = 'billpayment';
	$vnp_Amount = 100000 * 100;
	$vnp_Locale = 'vn';
	$vnp_BankCode = 'NCB';
	$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
	
	$vnp_ExpireDate = $expire;
	
	$inputData = array(
		"vnp_Version" => "2.1.0",
		"vnp_TmnCode" => $vnp_TmnCode,
		"vnp_Amount" => $vnp_Amount,
		"vnp_Command" => "pay",
		"vnp_CreateDate" => date('YmdHis'),
		"vnp_CurrCode" => "VND",
		"vnp_IpAddr" => $vnp_IpAddr,
		"vnp_Locale" => $vnp_Locale,
		"vnp_OrderInfo" => $vnp_OrderInfo,
		"vnp_OrderType" => $vnp_OrderType,
		"vnp_ReturnUrl" => $vnp_Returnurl,
		"vnp_TxnRef" => $vnp_TxnRef,
		"vnp_ExpireDate"=>$vnp_ExpireDate
		// "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
		// "vnp_Bill_Email"=>$vnp_Bill_Email,
		// "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
		// "vnp_Bill_LastName"=>$vnp_Bill_LastName,
		// "vnp_Bill_Address"=>$vnp_Bill_Address,
		// "vnp_Bill_City"=>$vnp_Bill_City,
		// "vnp_Bill_Country"=>$vnp_Bill_Country,
		// "vnp_Inv_Phone"=>$vnp_Inv_Phone,
		// "vnp_Inv_Email"=>$vnp_Inv_Email,
		// "vnp_Inv_Customer"=>$vnp_Inv_Customer,
		// "vnp_Inv_Address"=>$vnp_Inv_Address,
		// "vnp_Inv_Company"=>$vnp_Inv_Company,
		// "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
		// "vnp_Inv_Type"=>$vnp_Inv_Type
	);

	if (isset($vnp_BankCode) && $vnp_BankCode != "") {
		$inputData['vnp_BankCode'] = $vnp_BankCode;
	}
	// if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
	// 	$inputData['vnp_Bill_State'] = $vnp_Bill_State;
	// }

	//var_dump($inputData);
	ksort($inputData);
	$query = "";
	$i = 0;
	$hashdata = "";
	foreach ($inputData as $key => $value) {
	if ($i == 1) {
		$hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
	} else {
		$hashdata .= urlencode($key) . "=" . urlencode($value);
		$i = 1;
	}
	$query .= urlencode($key) . "=" . urlencode($value) . '&';
	}

	$vnp_Url = $vnp_Url . "?" . $query;
	if (isset($vnp_HashSecret)) {
	$vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
	$vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
	}
	$returnData = array('code' => '00'
	, 'message' => 'success'
	, 'data' => $vnp_Url);
	if (isset($_POST['redirect'])) {
		$_SESSION['code_cart'] = $code_order;
		header('Location: ' . $vnp_Url);
		die();
	} else {
		echo json_encode($returnData);
	}
	// vui lòng tham khảo thêm tại code demo
	echo 'Thanh toán bằng VNPAY';
}
unset($_SESSION['cart']);
header('Location:../../index.php?quanly=camon');
?>