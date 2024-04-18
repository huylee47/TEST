<?php
require_once "model/taikhoan.php";
if (!isset($_POST['dangnhap'])) {
    include_once "./view/dangnhap.php";
} else {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $checkuser = check_user($username, $password);
    if (is_array($checkuser)) {
        $_SESSION['user'] = $checkuser;
        header("location: admin/index.php");
    } else {
        echo $thongbao = "Tài khoản không tồn tại";
    }
}
?>
