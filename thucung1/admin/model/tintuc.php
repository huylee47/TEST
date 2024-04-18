<?php
require_once "pdo.php";
// Hiển thị toàn bộ tin tức
function loadall_tintuc(){
    $sql="select * from tintuc";
    return pdo_query($sql);
}
// Thêm mới tin tức
function themtintuc($tieude,$noidung,$hinhanh,$id_nguoitao){
    $sql = "INSERT INTO tintuc (tieude,noidung,img,id_nguoitao) VALUES ('$tieude','$noidung','$hinhanh','$id_nguoitao')";
    pdo_execute($sql);
}
// Xoá tin tức
function xoa_tintuc($id_tt){
    $sql = "DELETE FROM tintuc WHERE id_tintuc = '$id_tt'";
    pdo_execute($sql);
}
// Sửa tin tức
function sua_tintuc($tieude,$noidung,$hinhanh,$id_tt){
    $sql = "UPDATE tintuc SET tieude='$tieude', noidung='$noidung',img = '$hinhanh' WHERE id_tintuc = '$id_tt'";
    pdo_execute($sql);
}
// Lấy dữ liệu tin tức theo id tin tức
function tintuc($id_tt) {
    $sql = "SELECT * FROM tintuc WHERE id_tintuc = '$id_tt'";
    return pdo_query_one($sql);
}