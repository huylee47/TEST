<?php
require_once 'model/hoadon.php';
if (isset($_GET['id'])) {
    $mothoadon = list_mothoadon($_GET['id']);
    require_once 'view/tinhtrangdon/update.php';
} else if (isset($_POST['capnhat'])) {
    $id = $_POST['id'];
    $tinhtrang = $_POST['tinhtrang'];
    update_hoadon($id, $tinhtrang);
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=tinhtrangdon';</script>";
    exit;
}
