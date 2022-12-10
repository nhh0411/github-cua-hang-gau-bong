<?php
$code = $_GET['code'];
$sql_lietke_donhang = "SELECT * FROM gb_cart_details,gb_sanpham WHERE gb_cart_details.id_sp = gb_sanpham.id_sp AND gb_cart_details.code_cart='" . $code . "' ORDER BY gb_cart_details.id_cart_details DESC";
$query_lietke_donhang = mysqli_query($mysqli, $sql_lietke_donhang);
?>
<p style="font-family: Nunito;text-align: center;font-weight: 900;font-size: 30px;margin-top: 30px;color: #ee6477;">xem
    đơn hàng</p>
<table style="font-family: Nunito;width: 90%; margin: 0 auto;" class="table table-bordered table-hover">
    <thead class="" style="background-color: #ee6477; color:#fff;">
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <?php
	$i = 0;
	$tongtien = 0;
	while ($row = mysqli_fetch_array($query_lietke_donhang)) {
        $thanhtien = $row['soluongmua'] * $row['giasp'];
        $tongtien += $thanhtien;
        $i++;
	?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></td>
        <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>
    </tr>
    <?php
	}
	?>
    <tr>
        <td colspan="7">
            <p style="float: right;">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
        </td>
    </tr>

</table>
<div style="clear: both;"></div>