<?php 
require_once './view/header.php';
require_once './model/lichsumua.php';
$id_acc = $_SESSION['user']['id_taikhoan'];
$danhsachhoadon=list_hoadon_theo_id($id_acc);
require_once './view/lichsumua.php';
require_once './view/footer.php';

?>  