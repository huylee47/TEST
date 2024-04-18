<?php
if (!isset($_POST['themdanhmuc'])) {
    require_once 'view/danhmuc/add.php';
} else {
    require_once 'model/danhmuc.php';
    if (isset($_POST['ten']) && preg_match('/[^\p{Z}\r\n]+/u', $_POST['ten'])) {
        $tendm = $_POST['ten'];
        them_danhmuc($tendm);
    }else{
        echo "<script>alert('Thêm danh mục sản phẩm thất bại');</script>";
    }
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=themdanhmuc';</script>";
    exit;
}
