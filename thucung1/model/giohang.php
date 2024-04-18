<?php
require_once "model/pdo.php";
// Thêm sản phẩm , số lượng của người mua theo id người mua vào giỏ hàng
function insertGioHang($idTk, $soluong, $idSp)
{
    if (kiemTraCoHangChua($idTk, $idSp) == false) {
        $sql = "INSERT INTO chitiet_giohang (id_taikhoan, so_luong, id_sanpham) VALUES ('$idTk', '$soluong', '$idSp')";
    } else {
        $soLuong = laySoLuongTheoIdSp($idTk, $idSp) + 1;
        $sql = "UPDATE chitiet_giohang SET so_luong = '$soLuong' WHERE id_taikhoan = '$idTk' AND id_sanpham = '$idSp'";
    }
    pdo_execute($sql);
}
//  Lấy dữ liệu từ chi tiết giỏ hàng theo id người dùng và id sản phẩm 
function kiemTraCoHangChua($idTk, $idSp)
{
    $sql = "select * from chitiet_giohang where id_taikhoan=$idTk and id_sanpham=$idSp";
    $result = pdo_query($sql);
    if (count($result) == 0) {
        return false;
    }
    return true;
}
 //  Lấy số lượng sản phẩm  từ chi tiết giỏ hàng theo id người dùng và id sản phẩm 
function laySoLuongTheoIdSp($idTk, $idSp)
{
    $sql = "select * from chitiet_giohang where id_taikhoan=$idTk and id_sanpham=$idSp";
    return pdo_query_one($sql)['so_luong'];
}
function cap_nhat_so_luong($id_tk, $id_sp, $so_luong) {
    $sql = "update chitiet_giohang set so_luong = $so_luong where id_taikhoan = $id_tk and 
    id_sanpham = $id_sp";
    pdo_execute($sql);
  }
// lấy dữ liệu từ bảng chi tiết giỏ hàng và bảng sản phẩm theo id người dùng
function layChiTietGioHang($id_tk)
{
    $sql = "SELECT sp.ten_sanpham, sp.gia, sp.img, gh.so_luong as soluong, sp.id_sanpham FROM 
    `chitiet_giohang` gh inner join sanpham sp on gh.id_sanpham = sp.id_sanpham where gh.id_taikhoan = $id_tk";
    return pdo_query($sql);
}
// Xoá sản phẩm trong chi tiết giỏ hàng theo id sản phẩm
function xoa_giohang($id)
{
    $sql = "DELETE FROM chitiet_giohang WHERE id_sanpham =$id";
    pdo_execute($sql);
}