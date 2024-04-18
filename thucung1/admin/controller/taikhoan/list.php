<?php
require_once "model/taikhoan.php";
$listaccount= list_account();
$listaccountadmin= list_account_admin();
require_once "view/taikhoan/listacc.php";
?>