<?php
require_once "pdo.php";
// Kiểm tra voucher có tồn tại hay không 
function checkvoucher($voucherCode, &$message) {
    try {
        // Lấy dữ liệu bảng voucher 
        $sql = "SELECT * FROM voucher WHERE ma_voucher = '$voucherCode'";
        $voucher = pdo_query_one($sql);
        if($voucher == null) {
            return 1;
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngayBatDau = $voucher['ngaybatdau'];
        $ngayKetThuc = $voucher['ngayketthuc'];
        $today = date("Y-m-d H:i:s");
        if($today < $ngayBatDau) {
            $message = $ngayBatDau;
            return 2;
        }
        if($today > $ngayKetThuc) {
            $message = $ngayKetThuc;
            return 3;
        }
        $message = $voucher['giagiam'];
        return 4;
    }   
    catch (Exception $e) {
        echo $e;
        return 1;
    }
}