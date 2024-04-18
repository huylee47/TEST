<?php
require_once 'model/pdo.php';
// Hiển thị ảnh phụ theo id sản phẩm
function loadAnhTheoIdSanPham($id_sp){
    $sql="select ten_anh from khoanh where id_sanpham=$id_sp";
    return pdo_query($sql);    
}
