<?php
require_once './view/header.php';
require_once "model/danhmuc.php";
require_once "model/sanpham.php";

$id_dm=$_GET['id'];
if (isset($_GET['id'])) {
$dem = count_sanpham_id($id_dm); // 
// Đổi mảng 2 chiều sang chuỗi
$tongsp= $dem[0][0];   
$brands =brands();
    
    $listsanphamtheoiddm = laysanphamtheoiddanhmuc($_GET['id']);
}
require_once './view/chitietdanhmuc.php';
require_once './view/footer.php';