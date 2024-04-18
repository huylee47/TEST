<?php
require_once 'model/danhmuc.php';
if (isset($_GET['id']) ) {
    $motdanhmuc = list_motdanhmuc($_GET['id']);
    require_once 'view/danhmuc/update.php';
} else if (isset($_POST['capnhat']) && $_POST['ten'] != '') {
    $id = $_POST['id'];
    $tendm = $_POST['ten'];
    update_danhmuc($id, $tendm);
    // header('Location:index.php?act=listdanhmuc');
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listdanhmuc';</script>";
    exit;
}  else {
    echo "<script>alert('Sửa danh mục thất bại');</script>";
    // header('location: index.php?act=chitiet_sanpham&id='.$id_sp);
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listdanhmuc';</script>";
  }
