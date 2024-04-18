<?php
require_once "model/voucher.php";
if (isset($_POST['voucher'])) {
    $voucher = $_POST['voucher'];
    $check = checkvoucher($voucher, $message);
    if ($check === 1) {
        header('HTTP/1.1 500');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'Voucher không tồn tại', 'code' => 1)));
        return;
    } else if ($check === 2) {
        header('HTTP/1.1 500');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => "Voucher chưa bắt đầu, ngày bắt đầu: $message", 'code' => 2)));
        return;
    } else if ($check === 3) {
        header('HTTP/1.1 500');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => "Voucher đã hết han, ngày kết thúc: $message", 'code' => 3)));
        return;
    } else {
        header('HTTP/1.1 200');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => "Áp voucher thành công, Bạn được giảm: $message%", 'code' => 4, 'giagiam' => $message)));
        return;
    }
}
