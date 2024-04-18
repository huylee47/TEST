<?php

require_once './model/danhmuc.php';
require_once './model/mausac.php';
require_once "model/sanpham.php";
$listSanPhamAll = loadall_sanpham();
require_once "view/sanpham/list_sanphamall.php";
?>
