<?php
require_once './view/header.php';
require_once "model/sanpham.php";
$listsanpham = load_sanpham();
$dem = count_sanpham(); // 
// Đổi mảng 2 chiều sang chuỗi
$tongsp= $dem[0][0];   
$brands =brands();
require_once './view/cuahang.php';
require_once './view/footer.php';
