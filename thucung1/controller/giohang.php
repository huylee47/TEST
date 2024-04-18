<?php
// require_once './view/header.php';
require_once "model/sanpham.php";

if (!isset($_SESSION['user'])) {

    // them san pham
    if (isset($_GET['id']) &&  $_GET['id'] > 0) {
        $id = $_GET['id'];
        $sanpham = loadone_sanpham($id);
        if (!isset($_SESSION['giohang'])) {
            $_SESSION['giohang'] = [];
        }

        $gioHang = [
            'id_sanpham' => $sanpham['id_sanpham'],
            'ten_sanpham' => $sanpham['ten_sanpham'],   
            'gia' => $sanpham['gia'],
            'soluong' => 1,
            'img' => $sanpham['img'],
           
        ];

        $check = false;
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($item['id_sanpham'] == $id) {
                $_SESSION['giohang'][$key]['soluong'] += 1;
                $check = true;
                break;
            }
        }
        if ($check == false) {
            array_push($_SESSION['giohang'], $gioHang);
        }
    }
    // tinh tong tien
    $tongtien = 0;
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        foreach ($_SESSION['giohang'] as $item) {
            $tongtien += $item['gia'] * $item['soluong'];
        }
    }
}else{
    include_once 'model/giohang.php';
    if (isset($_GET['id']) &&  $_GET['id'] > 0){
        $id = $_GET['id'];
        $soluong=1;
        $id_taikhoan=$_SESSION['user']['id_taikhoan'];
        insertGioHang($id_taikhoan, $soluong, $id);
    }
}




header('location:index.php?act=showgiohang');