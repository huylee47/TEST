<?php
require_once "pdo.php";
// Kiểm tra dữ liệu người dùng khi đăng nhập theo tài khoản và mật khẩu
function check_user($username,$password){
    $sql= "SELECT * FROM taikhoan WHERE user ='".$username."' AND password ='".$password."' ";
    return pdo_query_one($sql);
}
// Kiểm tra id nguòi dùng theo tài khoản và mật khẩu
function check_id_user($username,$password){
  $sql= "SELECT id_taikhoan FROM taikhoan WHERE user ='".$username."' AND password ='".$password."' ";
  return pdo_query_one($sql);
}
// Người dùng đăng ký tài khoản
function insert_taikhoan($email, $user, $pass) {
    $sql = "INSERT INTO taikhoan(`user`, `password`, `email`) VALUES('$user', '$pass', '$email')";
    session_unset ();
    pdo_execute($sql);
  }
  // Lấy quyền của tài khoản theo id người dùng
  function get_account($id){
    $sql= "SELECT quyen FROM taikhoan WHERE id_taikhoan=$id";
    return pdo_query_one($sql);
}
// Lấy tên người dùng theo id người dùng
function get_ten_theo_id($id_tk){
  $sql= "SELECT * FROM taikhoan WHERE id_taikhoan = $id_tk";
  return pdo_query_one($sql)['ten'];
}
// Thực hiển thay đổi mật khẩu cho người dùng khi kiểm tra username
function quenmatkhau($username){
  $sql= "SELECT * FROM taikhoan WHERE user = '$username'";
  return pdo_query_one($sql);
}
// Thay đổi tài khoản
function update_taikhoan($id,$user,$email,$sdt,$diachi){
  $sql = "UPDATE taikhoan SET ten='$user', email='$email', diachi='$diachi', SDT='$sdt'  WHERE id_taikhoan =$id;";
  pdo_execute($sql);
}