<?php
require_once './view/header.php';
require_once './model/lichsumua.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
$id_hoadon=$_GET['id'];
$list_chitiet_hoadon =  load_all_cthoadon_by_idhoadon($id_hoadon);
}
require_once './view/chitietdonhang.php';
require_once './view/footer.php';
?>