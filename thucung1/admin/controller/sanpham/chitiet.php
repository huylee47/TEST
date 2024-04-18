<?php
require_once './model/sanpham.php';
require_once './model/danhmuc.php';
$listdanhmuc = list_danhmuc();
    $id_sp=$_GET['id'];
    $motsanpham= sanpham($id_sp);
    $ten_dm = get_id_danhmuc_by_id_sp ($id_sp);
    $ten_danhmuc=get_ten_danhmuc($ten_dm);
    require_once 'view/sanpham/chitietsanpham.php';
?>