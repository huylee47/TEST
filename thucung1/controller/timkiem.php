<?php
require_once './view/header.php';
require_once "model/timkiem.php";
require_once "model/sanpham.php";
$tukhoa=$_GET['tukhoa'];
$brands =brands();
if (isset($_GET['tukhoa'])) {
    $listSanPham = timkiem($_GET['tukhoa']);
    $timkiem = count_sanpham_name($tukhoa); // 
// Đổi mảng 2 chiều sang chuỗi
   $tongsp= $timkiem[0][0];   
}
require_once './view/timkiem.php';
require_once './view/footer.php';
