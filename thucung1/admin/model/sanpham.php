<?php
require_once "pdo.php";
// hiển thị sản phẩm theo id sanh mục sản phẩm
function layHetSanPhamTheoIdDanhMuc($id){
    $sql="select * from sanpham where id_danhmuc= $id";
    return pdo_query($sql);
}
// hiên thị toàn bộ sản phẩm
function loadall_sanpham(){
    $sql="select * from sanpham";
    return pdo_query($sql);
}
// Thêm sản phẩm mới
function themsanpham($id_dm,$tensp,$gia,$hinhanh,$ghichu,$soluong,$NSX,$xuatxu){
    $sql = "INSERT INTO sanpham (id_danhmuc,ten_sanpham,img,gia,ghichu,so_luong,nha_san_xuat,xuatxu) VALUES ('$id_dm','$tensp','$hinhanh','$gia','$ghichu','$soluong','$NSX','$xuatxu')";
    return pdo_execute_return_id($sql);
}
// Xoá sản phẩm
function xoa_sanpham($id_sp){
    $sql = "DELETE FROM sanpham WHERE id_sanpham = '$id_sp'";
    pdo_execute($sql);
}
// Xoá sản phẩm khi id danh mục bị xoá 
function xoa_sanpham_id_danhmuc($id_dm){
    $sql = "DELETE FROM sanpham WHERE id_danhmuc = '$id_dm'";
    pdo_execute($sql);
}
// Lấy id sản phẩm theo id danh mục 
 function lay_id_sanpham_id_danhmuc($id_dm){
    $sql= "SELECT * FROM sanpham WHERE id_danhmuc = $id_dm";
    return pdo_query_one($sql)['id_sanpham'];
}
// Sửa sản phẩm 
function sua_sanpham($id_dm,$id_sp,$tensp,$gia,$hinhanh,$ghichu,$soluong,$NSX,$xuatxu){
    $sql = "UPDATE sanpham SET id_danhmuc='$id_dm', ten_sanpham = '$tensp',img = '$hinhanh',gia = '$gia',ghichu = '$ghichu',
    so_luong ='$soluong',nha_san_xuat='$NSX',xuatxu='$xuatxu' WHERE id_sanpham = '$id_sp'";
    pdo_execute($sql);
}
// Hiển thị sản phẩm chi tiết theo id sản phẩm
function sanpham($id_sp) {
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id_sp'";
    return pdo_query_one($sql);
}
// Lấy tên sản phẩm theo id sản  phẩm   
function get_ten_sanpham_by_id($id_sp){
    $sql= "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
    return pdo_query_one($sql)['ten_sanpham'];
}
// Lấy ảnh sản phẩm theo id sản phẩm
function get_anh_sanpham_by_id($id_sp){
    $sql= "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
    return pdo_query_one($sql)['img'];
}
// Lấy id danh mục theo id sản phẩm
function get_id_danhmuc_by_id_sp($id_sp){
    $sql= "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
    return pdo_query_one($sql)['id_danhmuc'];
}