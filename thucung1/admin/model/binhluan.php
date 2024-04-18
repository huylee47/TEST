<?php
require_once "pdo.php";
// Hiển thị danh sách bình luận
function list_binhluan(){
    $sql= "SELECT * FROM binhluan ORDER BY id_binhluan DESC";
    return pdo_query($sql);
}
// Ẩn bình luận người dùng
function hide_binhluan($id_bl) {
    $sql = "UPDATE binhluan SET trangthai = 0 WHERE id_binhluan=$id_bl";
    pdo_execute($sql);
}
// Hiển thị bình luận người dùng
function show_binhluan($id_bl) {
    $sql = "UPDATE binhluan SET trangthai = 1 WHERE id_binhluan=$id_bl";
    pdo_execute($sql);
}
// Xoá bình luận người dùng
function delete_binhluan($id_bl) {
    $sql = "DELETE FROM binhluan WHERE id_binhluan = $id_bl";
    pdo_execute($sql);
}
// Xoá bình luận nếu sản phẩm bị xoá 
function xoa_binhluan_id($id_sp) {
    $sql = "DELETE FROM binhluan WHERE id_sanpham = $id_sp";
    pdo_execute($sql);
}
?> 
