<?php
require_once "pdo.php";
// Kiểm tra tài khoản admin theo tài khoản và mật khẩu
function check_admin($username,$password){
    $sql= "SELECT * FROM taikhoan WHERE user ='".$username."' AND password ='".$password."' ";
    return pdo_query_one($sql);
}
// HIển thị danh sách tài khoản người dùng , bao gồm tài khoản bị khoá
function list_account(){
    $sql= "SELECT * FROM taikhoan WHERE quyen != 1 ";
    return pdo_query($sql);
}
// Hiển thị danh sách tài khoản admin
function list_account_admin(){
    $sql= "SELECT * FROM taikhoan WHERE quyen = 1 ";
    return pdo_query($sql);
}
// Khoá tài khoản người dùng
function lock_account($id){
    $sql= "UPDATE taikhoan SET quyen = 2 WHERE id_taikhoan=$id";
    pdo_execute($sql);
}
// Mở khoá tài khoản người dùng
function unlock_account($id){
    $sql= "UPDATE taikhoan SET quyen = 0 WHERE id_taikhoan=$id";
    pdo_execute($sql);
}
// Lấy dữ liệu "quyền hạn " của tài khoản theo id tài khoản
function get_account($id){
    $sql= "SELECT quyen FROM taikhoan WHERE id_taikhoan=$id";
    return pdo_query_one($sql);
}