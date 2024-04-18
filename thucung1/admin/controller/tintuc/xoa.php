<?php
require_once './model/tintuc.php';
if(isset($_GET['id']) && $_GET['id']>0){
   $id_tt=$_GET['id'];
   xoa_tintuc($id_tt);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/test/thucung1/admin/index.php?act=listtintuc';</script>";
?>