<?php
//  Trả về kết quả tìm kiếm theo dữ liệu người dùng nhập vào 
function timkiem($key) {
    $sql = "SELECT * FROM sanpham WHERE ten_sanpham LIKE '%$key%'";
    return pdo_query($sql);
}
// Trả về sản phẩm có thương hiệu theo dữ luêụ người dùng nhập vào
function find_brands($key) {
    $sql = "SELECT * FROM sanpham WHERE nha_san_xuat LIKE '%$key%'";
    return pdo_query($sql);
}