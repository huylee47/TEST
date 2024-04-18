<?php
require_once "model/taikhoan.php";
if (!isset($_POST['dangky'])) {
    include_once "./view/dangky.php";
}
else {
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    // Thực hiện thêm tài khoản
    insert_taikhoan($email, $user, $pass);?>
                <script>
                  alert('Đăng ký thành công');
                  window.location.href = 'index.php?act=dangnhap';
                </script><?php
}

?>