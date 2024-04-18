<?php
require_once "model/binhluan.php";
require_once "model/sanpham.php";
$listbinhluan = list_binhluan();
require_once "view/binhluan/list.php";
?>