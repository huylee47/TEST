<?php
require_once "pdo.php";
// Hiển thị toàn bộ tin tức
function loadall_tintuc(){
    $sql="select * from tintuc";
    return pdo_query($sql);
}
// Hiển thị tin tức theo id 
function laytintuctheoid($id_tt){
    $sql="select * from tintuc where id_tintuc='$id_tt'";
    return pdo_query_one($sql);
}