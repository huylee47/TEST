<?php
require_once "pdo.php";
// Đếm số lượng tài khoản người dùng
function soluongnguoidung(){
    $sql="SELECT COUNT(*) FROM taikhoan WHERE quyen != 1";
    return pdo_query($sql);
}
// Đếm số lượng sản phẩm 
function soluongsanpham(){
    $sql="SELECT COUNT(*) FROM sanpham ";
    return pdo_query($sql);
}
// Đếm số lượng bài viết trên trang
function soluongbaiviet(){
    $sql="SELECT COUNT(*) FROM tintuc ";
    return pdo_query($sql);
}
// Tính tổng doanh thu 
function tongdoanhso(){
    $sql="SELECT SUM(tong_tien) FROM hoadon WHERE tinhtrang = 4";
    return pdo_query($sql);
}