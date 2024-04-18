<?php
require_once "model/binhluan.php";
require_once "model/sanpham.php";
if(isset($_POST['thembinhluan']) && ($_POST['idnguoidung']>0)){}
$id=$_POST['idnguoidung'];
$id_sp=$_POST['idsanpham'];
$noidungBL=$_POST['noidung'];
$danhgia=$_POST['sosao'];
if (preg_match('/[^\p{Z}\r\n]+/u', $noidungBL)) {
    them_binhluan($id, $noidungBL,$id_sp,$danhgia);
    echo "<script>alert('Bình luận thành công');</script>";
    header('location: index.php?act=chitiet_sanpham&id='.$id_sp);
  }else {
    echo "<script>alert('Bình luận thất bại');</script>";
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/index.php?act=chitiet_sanpham&id=$id_sp';</script>";
  }
?>