<?php
require_once 'pdo.php';
function list_hoadon_theo_id($id_acc){
    $sql="SELECT * FROM hoadon WHERE id_taikhoan=$id_acc";
    return pdo_query($sql);
}
function load_all_cthoadon_by_idhoadon($id) {
    $sql = "SELECT * FROM `chitiet_hoadon` where id_hoadon = $id";
    return pdo_query($sql);
}
?>