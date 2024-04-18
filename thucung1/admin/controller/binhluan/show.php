<?php
require_once "model/binhluan.php";
if (isset($_GET['id'])) {
    $id_bl = $_GET['id'];
    show_binhluan($id_bl);
    echo "<script type='text/javascript'>window.top.location='http://localhost/test/thucung1/admin/index.php?act=listbinhluan';</script>";

}
exit;
?>