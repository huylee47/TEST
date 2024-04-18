<?php
require_once './model/sanpham.php';
require_once './model/binhluan.php';
if(isset($_GET['id']) && $_GET['id']>0){
   $id_sp=$_GET['id'];
   xoa_binhluan_id($id_sp);
   xoa_sanpham($id_sp);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/test/thucung1/admin/index.php?act=listsanpham';</script>";
?>