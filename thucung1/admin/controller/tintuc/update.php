<?php
require_once './model/tintuc.php';
if(isset($_GET['id'])){
    $id_tt=$_GET['id'];
    $mottintuc= tintuc($id_tt);
    require_once 'view/tintuc/update.php';
}
if (isset($_POST['suatintuc'])) {
    $id_tt=$_POST['id'];
    $tieude=$_POST['tieude'];
    $noidung = $_POST['noidung'];                       
    $hinhanh= $_FILES['hinhanh']['name'];
    if(isset($_FILES['hinhanh'])){
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../upload/'.$hinhanh);
    sua_tintuc($tieude,$noidung, $hinhanh, $id_tt);
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listtintuc';</script>";
    exit;
}
}
?>