<?php
if (isset($_GET['act']) && $_GET['act'] == 'xoasanpham' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['user'])) {
        require_once './model/giohang.php';
        xoa_giohang($id);
    } else {
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($item['id_sanpham'] == $id) {
                unset($_SESSION['giohang'][$key]);
                break;
            }
        }
    }
}
header('location:index.php?act=showgiohang');
?>
