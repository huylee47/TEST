<?php
require_once './model/thongke.php';
$demsp = soluongsanpham();
$demnguoidung = soluongnguoidung();
$dembaiviet = soluongbaiviet();
$tinhtongdoanhso = tongdoanhso();

$soluongnguoidung = $demnguoidung[0][0];
$soluongsanpham = $demsp[0][0];
$sobaiviet = $dembaiviet[0][0];
$tongdoanhso = $tinhtongdoanhso[0][0];

require_once "view/thongke/thongke.php"; 