<?php
    include('admin/config/config.php');
    // require('Carbon/autoload.php');
    // use Carbon\Carbon;

    // $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    If(isset($_GET['vnp_amount'])){

        $vnp_amount = $_GET['vnp_Amount'];
        $vnp_bankcode = $_GET['vnp_BankCode'];
        $vnp_banktranno = $_GET['vnp_BankTranno'];
        $vnp_cardtype = $_GET['vnp_CardType'];
        $vnp_orderinfo = $_GET['vnp_OderInfo'];
        $vnp_paydate = $_GET['vnp_PayDate'];
        $vnp_tmncode = $_GET['vnp_TmnCode'];
        $vnp_transactionno = $_GET['vnp_Transactionno'];
        $code_cart = $_SESSION['code_cart'];

        //TODO insert database vnpay
        $insert_vnpay = "INSERT INTO gb_vnpay(vnp_amount,vnp_bankcode,vnp_banktranno,vnp_cardtype,vnp_oderinfo,vnp_paydate,vnp_tmncode,vnp_transactionno,code_cart) VALUE('".$vnp_amount."','".$vnp_bankcode."','".$vnp_banktranno."','".$vnp_cardtype."','".$vnp_orderinfo."','".$vnp_paydate."','".$vnp_tmncode."','".$vnp_transactionno."','".$code_cart."')";
        $cart_query = mysqli_query($mysqli,$insert_vnpay);
        if($cart_query){
            // TODO insert giỏ hàng
            echo '<h3>Giao dịch thanh toán VNPAY thành công </h3>';
            echo '<p>Vui lòng vào trang <a tagert="_blank" herf="#">Lịch sử giao hàng</a> để xem chi tiết đơn hàng của bạn</p>';
        }
        else{
            echo 'Giao hàng thất bại';
        }
    }
?>
<h2 style="text-align: center;color: #ee6477">Cám ơn bạn đãn mua hàng của chúng tôi</h2>