<?php
require_once "pdo.php";
// Hiển thị danh mục
 function list_danhmuc(){
    $sql= "SELECT * FROM danhmuc";
    return pdo_query($sql);
 }
//  Lấy sản phẩm theo id danh mục
 function laysanphamtheoiddanhmuc($id_dm){
    $sql= "SELECT * FROM sanpham WHERE id_danhmuc = $id_dm";
    return pdo_query($sql);
 }
 ?>