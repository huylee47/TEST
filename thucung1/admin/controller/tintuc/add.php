<?php
require_once './model/tintuc.php';
require_once 'view/tintuc/add.php';
if (isset($_POST['themtintuc'])) {
    if ( preg_match('/[^\p{Z}\r\n]+/u', $_POST['tieude'])
    && preg_match('/[^\p{Z}\r\n]+/u', $_POST['noidung'])){
    $tieude=$_POST['tieude'];
    $noidung=$_POST['noidung'] ;
    $hinhanh= $_FILES['hinhanh']['name'];
    $id_nguoitao= $_POST['id_nguoitao'];
    if(isset($_FILES['hinhanh'])){
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../upload/'.$hinhanh);
}
    themtintuc($tieude,$noidung,$hinhanh,$id_nguoitao);
} else{
    echo "<script>alert('Thêm tin tức thất bại');</script>";
    echo "<script type='text/javascript'>window.top.location='http://localhost/test/thucung1/admin/index.php?act=themtintuc';</script>";
}
}
