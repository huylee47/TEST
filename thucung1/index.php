<?php
session_start();
if (($_GET == [])) {
    require_once 'controller/home.php';
} else {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'cuahang':
                require_once "controller/cuahang.php";
                break;
            case 'lienhe':
                require_once "controller/lienhe.php";
                break;
            case 'giohang':
                require_once "controller/giohang.php";
                break;
            case 'blog':
                require_once "controller/blog.php";
                break;
            case 'chitiet_sanpham':
                require_once "controller/chitiet_sanpham.php";
                break;
            case 'chitiet_blog':
                require_once "chitiet_blog.php";
                break;
            case 'quenmatkhau':
                require_once "controller/quenmatkhau.php";
                break;
            case 'dangnhap':
                require_once "controller/dangnhap.php";
                break;
            case 'dangky':
                require_once "controller/dangky.php";
                break;
            case 'dangxuat':
                require_once "controller/dangxuat.php";
                break;
            case 'xoasanpham':
                require_once "controller/xoa.php";
                break;
            case 'dathang':
                require_once "controller/dathang.php";
                break;
            case 'thembinhluan':
                require_once "controller/binhluan.php";
                break;
            case 'showgiohang':
                require_once "controller/showgiohang.php";
                break;
            case 'chitiettintuc':
                require_once "controller/chitiettintuc.php";
                break;
            case 'chitietdanhmuc':
                require_once "controller/chitietdanhmuc.php";
                break;
            case 'timkiem':
                require_once "controller/timkiem.php";
                break;
            case 'brands':
                require_once "controller/hang.php";
                break;
            case 'checkvoucher':
                require_once "controller/checkvoucher.php";
                break;
            case 'thongtin':
                require_once "controller/thongtin_khachhang.php";
                break;
            case 'lichsumua':
                require_once "controller/lichsumua.php";
                break;
            case 'chitietdonhang':
                require_once "controller/chitietdonhang.php";
                break;
            case 'capnhatgiohang':
                require_once "controller/capnhatgiohang.php";
                break;
        }
    }
}
// require_once 'footer.php';
