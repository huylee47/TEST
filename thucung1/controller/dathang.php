<?php
require_once './view/header.php';
require_once "model/dathang.php";
require_once "model/giohang.php";

$id_taikhoan = isset($_SESSION['user']) ? $_SESSION['user']['id_taikhoan'] : 0;
$ten = $_POST['ten'];
$sdt = $_POST['sdt'];
$ghichu = $_POST['ghichu'];
$diachi = $_POST['diachi'];
$pttt = $_POST['pttt'];
$tongtien= $_POST['tongtien'];
$idHoaDon = insert_hoadon($id_taikhoan, $ten, $sdt, $ghichu, $diachi, $pttt, $tongtien);
$sanpham = isset($_SESSION['user']) ? layChiTietGioHang($id): $_SESSION['giohang'];
foreach ($sanpham as $sp) {
    insert_chitethoadon($idHoaDon, $sp['id_sanpham'], $sp['gia'], $sp['soluong']);
}


// Xóa tất cả các sản phẩm trong giỏ hàng sau khi đặt hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    unset($_SESSION['gioHangs']);
}

require_once "view/giohang.php";
