<?php
require_once "model/taikhoan.php";
if (!isset($_POST['dangnhap'])) {
    include_once "./view/dangnhap.php";
} else {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $checkuser = check_user($username, $password);
    $checkid=check_id_user($username, $password);
    if (is_array($checkuser)) {
        $_SESSION['user'] = $checkuser;
        if ($_SESSION['user']['quyen'] != '2') {
        header("location: index.php");
        }
        else{
            echo "<script>alert('tài khoản đã bị khoá !');</script>";
            echo "
            <script>
                window.location.href = 'index.php?act=dangnhap'
            </script>";
        }
    }  
    else {
        echo "<script>alert('Bạn nhập sai thông tin tài khoản hoặc mật khẩu , vui lòng nhập lại');</script>";
        echo "
        <script>
            window.location.href = 'index.php?act=dangnhap'
        </script>";
    }

}
?>
