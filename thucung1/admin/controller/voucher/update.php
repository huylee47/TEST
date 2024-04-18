<?php
require_once 'model/voucher.php';
if (isset($_GET['id'])) {
    $motvoucher = list_motvoucher($_GET['id']);
    require_once 'view/voucher/update.php';
} else if (isset($_POST['capnhat'])) {
    $id = $_POST['id'];
    $tenvoucher = $_POST['ten'];
    $giagiam = $_POST['giagiam'];
    $mavoucher= $_POST['mavoucher'];
    $start= $_POST['start'];
    $end= $_POST['end'];
    update_voucher($id, $tenvoucher,$giagiam, $mavoucher, $start,$end);
    echo "<script type='text/javascript'>window.top.location='http://localhost/test/thucung1/admin/index.php?act=listvoucher';</script>";
    exit;
}
