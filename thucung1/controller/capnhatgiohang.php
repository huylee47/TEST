<?php
require_once "model/giohang.php";
if (isset($_POST['id_sanpham']) && $_POST['id_sanpham'] != '' && isset($_POST['soluong']) && $_POST['soluong'] > 0) {
    $id_sp = $_POST['id_sanpham'];
    $so_luong = $_POST['soluong'];
    if (isset($_SESSION['user'])) {
        $id_tk = $_SESSION['user']['id_taikhoan'];
        cap_nhat_so_luong($id_tk, $id_sp, $so_luong);
    } else {
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($item['id_sanpham'] == $id_sp) {
                $_SESSION['giohang'][$key]['soluong'] =$so_luong;
                break;
            }
        }
    }
}
