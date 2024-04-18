<?php
require_once './model/tintuc.php';
if(isset($_GET['id']) && $_GET['id']>0){
   $id_tt=$_GET['id'];
   xoa_tintuc($id_tt);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listtintuc';</script>";
?>