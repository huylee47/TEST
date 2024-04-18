<?php
require_once './view/header.php';
require_once "model/tintuc.php";
$listTinTucAll = loadall_tintuc();
$id_tt=$_GET['id'];
if (isset($_GET['id'])) {
    $mottintuc = laytintuctheoid($_GET['id']);
}
require_once './view/chitiet_blog.php';
require_once './view/footer.php';