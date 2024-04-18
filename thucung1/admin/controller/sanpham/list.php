<?php
require_once "model/sanpham.php";
require_once './model/danhmuc.php';
require_once './model/mausac.php';
$listdanhmuc = list_danhmuc();

if (isset($_GET['id'])) {
    $listSanPham = layHetSanPhamTheoIdDanhMuc($_GET['id']);
}
require_once "view/sanpham/list_sanpham.php";
?>