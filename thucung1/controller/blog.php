<?php
require_once "model/tintuc.php";
require_once './view/header.php';
$listTinTucAll = loadall_tintuc();
require_once './view/blog.php';
require_once './view/footer.php';
