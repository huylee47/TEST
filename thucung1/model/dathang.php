<?php
require_once "model/pdo.php";
//  Nhập dữ liệu hoá đơn
function insert_hoadon($id_taikhoan,$ten, $sdt,  $ghichu, $diachi, $pttt, $tongtien) {
        $sql = "INSERT INTO `hoadon` (id_taikhoan,ten, SDT,  ghichu, diachi, phuongthuc_thanhtoan ,tong_tien) VALUES ('$id_taikhoan','$ten', '$sdt',  '$ghichu', '$diachi', '$pttt', '$tongtien')";
        return pdo_execute_return_id($sql);
    }
//  Nhập dữ liệu chi tiết hoá đơn
    function insert_chitethoadon($id_hoadon, $id_sanpham, $gia, $soluong) {
        $sql = "INSERT INTO `chitiet_hoadon` (id_hoadon, id_sanpham, gia, so_luong) VALUES ('$id_hoadon', '$id_sanpham', '$gia', '$soluong')";
        pdo_execute($sql);
    }