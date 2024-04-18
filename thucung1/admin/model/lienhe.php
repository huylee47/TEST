<?php
// hiển thị danh sách người dùng liên hệ 
require_once "pdo.php";
function loadall_lienhe(){
    $sql="select * from lienhe";
    return pdo_query($sql);
}
?>
