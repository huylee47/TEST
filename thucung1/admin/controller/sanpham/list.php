<?php
require_once "model/sanpham.php";
if (isset($_GET['id'])) {
    $listSanPham = layHetSanPhamTheoIdDanhMuc($_GET['id']);
}
require_once "view/sanpham/list_sanpham.php";
?>