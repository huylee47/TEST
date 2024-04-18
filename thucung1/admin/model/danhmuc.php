<?php
require_once "pdo.php";
// Hiển thị danh mục sản phẩm
function list_danhmuc()
{
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
 }

// function add_danhmuc($ten_dm){
//     $sql= "INSERT INTO danhmuc  (ten_danhmuc) VALUES('$ten_dm')";
//     pdo_execute($sql);
// }
// function change_danhmuc($ten_dm){
//     $sql = "UPDATE danhmuc SET ten_danhmuc='.$ten_dm.'";
//     pdo_execute($sql);
// }
// //  Thêm danh mục sản phẩm
function them_danhmuc($tendm)
{
    $sql = "INSERT INTO danhmuc (ten_danhmuc) VALUES ('$tendm')";
    pdo_execute($sql);
}
// Xoá danh mục sản phẩm
function xoa_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id_danhmuc = '$id'";
    pdo_execute($sql);
}
// Hiển thị danh mục sản phẩm theo id danh mục
function list_motdanhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc =$id";
    return pdo_query_one($sql);
}// Sửa danh mục sản phẩm
function update_danhmuc($id, $tendm)
{
    $sql = "UPDATE danhmuc SET ten_danhmuc = '$tendm' WHERE id_danhmuc = '$id'";
    pdo_execute($sql);
}
// Lấy tên danh mục theo id danh mục 
function get_ten_danhmuc($id){
    $sql= "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
    return pdo_query_one($sql)['ten_danhmuc'];
}
    