<?php
require_once "pdo.php";
// hiển thị toàn bộ sản phẩm 
 function load_sanpham(){
    $sql= "SELECT * FROM sanpham";
    return pdo_query($sql);
 }
 // hiển thị sản phẩm theo id sản phẩm
 function layHetSanPhamTheoId($id){
    $sql="select * from sanpham where id_sanpham= $id";
    return pdo_query_one($sql);
}
 // hiển thị sản phẩm theo id sản phẩm
function loadone_sanpham($id){
   $sql="select * from sanpham where id_sanpham=".$id;
   $sp= pdo_query_one($sql);
   return $sp;
}
// Hiển thị sản phẩm tối đa 1
function load_motsanpham(){
   $sql= "SELECT * FROM sanpham limit 1";
   return pdo_query_one($sql);
}
// Đếm số lượng sản phẩm
function count_sanpham(){
      $sql= "SELECT COUNT(*) FROM sanpham";
      return pdo_query($sql);   
}
// lấy tên sản phẩm theo id sản phẩm
function get_ten_sanpham_by_id($id_sp){
   $sql= "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
   return pdo_query_one($sql)['ten_sanpham'];
}
// lấy ảnh sản phẩm theo id sản phẩm
function get_anh_sanpham_by_id($id_sp){
   $sql= "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
   return pdo_query_one($sql)['img'];
}
// Đếm số lượng sản phẩm theo kết quả tìm kiếm theo nhà sản xuất hoặc tên sản phẩm
function count_sanpham_name($name){
   $sql= "SELECT COUNT(*) FROM sanpham WHERE nha_san_xuat LIKE '%$name%' OR ten_sanpham LIKE '%$name%'";
   return pdo_query($sql);   
}
// Đếm sản phẩm theo id danh mục 
function count_sanpham_id($id_dm){
   $sql= "SELECT COUNT(*) FROM sanpham WHERE id_danhmuc=$id_dm";
   return pdo_query($sql);   
}
//  Xuất các thương hiệu không trùng lặp
function brands(){
    $sql= "SELECT DISTINCT nha_san_xuat FROM sanpham";
    return pdo_query($sql);
}
// Hiển thị sản phẩm theo thương hiệu
function sanpham_brands($nsx){
  $sql = "SELECT * FROM sanpham WHERE nha_san_xuat = $nsx";
  return pdo_query($sql);
}
// List ảnh theo sản phẩm 
function list_anh($id_sp){
    $sql= "SELECT * FROM khoanh WHERE id_sanpham = $id_sp";
    return pdo_query($sql);
}

?>

