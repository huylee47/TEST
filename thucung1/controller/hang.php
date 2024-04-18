<?php
require_once './view/header.php';
require_once "model/timkiem.php";
require_once "model/sanpham.php";
$name=$_GET['name'];
$brands =brands();

    $listSanPham = find_brands($name);
    $timkiem = count_sanpham_name($name); // 
// Đổi mảng 2 chiều sang chuỗi
   $tongsp= $timkiem[0][0];   

require_once './view/hang.php';
require_once './view/footer.php';
