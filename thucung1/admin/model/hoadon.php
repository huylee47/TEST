<?php
require_once "pdo.php";
// Hiển thị danh sách hoá đơn
function loadall_hoadon(){
    $sql="select * from hoadon";
    return pdo_query($sql);
}
// Xoá hoá đơn theo id hoá đơn
function xoa_hoadon($id_hoadon){
    $sql = "DELETE FROM hoadon WHERE id_hoadon = '$id_hoadon'";
    pdo_execute($sql);
}
// Hiển thị một hoá đơn
function list_mothoadon($id)
{
    $sql = "SELECT * FROM hoadon WHERE id_hoadon =$id";
    return pdo_query_one($sql);
}
// Cập nhật tình trạng hoá đơn
function update_hoadon($id,$tinhtrang)
{
    $sql = "UPDATE hoadon SET tinhtrang = '$tinhtrang' WHERE id_hoadon = '$id'";
    pdo_execute($sql);
}
// Hiển thị chi tiết hoá đơn
function loadall_chitiethoadon(){
    $sql="select * from chitiet_hoadon";

    $listchitiethoadon= pdo_query($sql);
    return $listchitiethoadon;
}
// Thay đổi tình trạng hoá đơn thành đang giao hàng
function dangiaohang($id_hoadon) {
    $sql = "UPDATE hoadon SET tinhtrang = 2 WHERE id_hoadon=$id_hoadon";
    pdo_execute($sql);
}
// Thay đổi tình trạng hoá đơn thành  mới đặt hàng
function chuagiaohang($id_hoadon) {
    $sql = "UPDATE hoadon SET tinhtrang = 1 WHERE id_hoadon=$id_hoadon";
    pdo_execute($sql);
}
// Hiển thị chi tiết hoá đơn theo id hoá đơn
function load_all_cthoadon_by_idhoadon($id) {
    $sql = "SELECT * FROM `chitiet_hoadon` where id_hoadon = $id";
    return pdo_query($sql);
}
?>