<?php
require_once 'model/danhmuc.php';
require_once './model/sanpham.php';
require_once './model/binhluan.php';
if (isset($_GET['id'])&& $_GET['id']>0) {
    $id=lay_id_sanpham_id_danhmuc($_GET['id']);
    xoa_binhluan_id($id);   
    xoa_sanpham_id_danhmuc($_GET['id']);
    xoa_danhmuc($_GET['id']);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/test/thucung1/admin/index.php?act=listdanhmuc';</script>";
    exit;
    ?>