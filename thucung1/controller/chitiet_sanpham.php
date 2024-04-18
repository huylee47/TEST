<?php
require_once './view/header.php';
require_once "model/binhluan.php";
require_once 'model/sanpham.php';
require_once 'model/taikhoan.php';
require_once 'model/khoanh.php';
$listsanpham = load_sanpham();
$id_sp = $_GET['id'];
$listbl = hienthi_binhluan($id_sp);
$khoanh =loadAnhTheoIdSanPham($id_sp);
$listDanhGia = array_map(function ($list) {
    return $list['danhgia'];
}, $listbl);
if(count($listDanhGia)>0){
$trungBinhMang = tinh_trung_binh_mang($listDanhGia);
$trungBinhMang = refactorDanhGia($trungBinhMang);
$trungBinhso = tinh_trung_binh_mang($listDanhGia);
$trungBinhso=rate($trungBinhso);
}
else{
    $trungBinhMang=0;
    $trungBinhso =0;
}
if (isset($_GET['id'])) {
    $listanh =list_anh($id_sp);
    $listSanPham = layHetSanPhamTheoId($_GET['id']);
}


require_once './view/chitiet_sanpham.php';
require_once './view/footer.php';

function tinh_trung_binh_mang($mang)
{
    $so_phan_tu = count($mang);
    $tong = array_sum($mang);
    $trung_binh = $tong / $so_phan_tu;
    return $trung_binh;
}

function refactorDanhGia($so)
{
    $so = round($so, 2);
    $so = $so * 100;
    $phanNguyen = $so / 100;
    $phanNguyen = (int) $phanNguyen;
    $phanDu = $so % 100;
    if ($phanDu >= 75) {
        $phanNguyen += 1;
        return $phanNguyen;
    } else if ($phanDu >= 25) {
        return $phanNguyen . "." . 5;
    } else {
        return $phanNguyen;
    }
}
function rate($avg){
    $avg = round($avg, 2);
    return $avg;
}