<?php
require_once "model/hoadon.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $listchitiethoadon = load_all_cthoadon_by_idhoadon($id);
require_once "view/hoadon/chitiethoadon.php";
}

?>