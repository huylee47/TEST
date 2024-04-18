<?php
require_once './view/header.php';
require_once 'model/taikhoan.php';
if (!isset($_POST['update'])){
    require_once './view/thongtin_khachhang.php';
}else{
    $id=$_SESSION['user']['id_taikhoan'];
    $user=$_POST['user'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    update_taikhoan($id,$user,$email,$sdt,$diachi);
    // Cập nhật vào session
    $_SESSION['user']['user'] = $user;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['SDT'] = $sdt;
    $_SESSION['user']['diachi'] = $diachi;
    echo "<script>alert('Cập nhật thành công!');</script>";
    echo "<script type='text/javascript'>window.top.location='index.php?act=thongtin';</script>";
    exit;    
}
require_once './view/footer.php';
