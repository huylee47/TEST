<?php   
require_once 'view/voucher/add.php';

    require_once 'model/voucher.php';
if (isset($_POST['themvoucher'])) {
        $tenvoucher = $_POST['ten'];
        $giagiam = $_POST['giagiam'];
        $mavoucher= $_POST['mavoucher'];
        $start= $_POST['start'];
        $end= $_POST['end'];
        them_voucher($tenvoucher,$giagiam,$mavoucher,$start,$end);
    
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listvoucher';</script>";
    exit;
}
