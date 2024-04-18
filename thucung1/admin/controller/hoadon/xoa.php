<?php
require_once './model/hoadon.php';
if(isset($_GET['id']) && $_GET['id']>0){
   $id_hoadon=$_GET['id'];
   xoa_hoadon($id_hoadon);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listhoadon';</script>";
?>