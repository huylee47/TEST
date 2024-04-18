<?php
require_once "model/sanpham.php";
$listSanPhamAll = loadall_sanpham();
require_once "view/sanpham/list_sanphamall.php";
?>
