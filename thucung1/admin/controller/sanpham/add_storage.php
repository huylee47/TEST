<?php
require_once './model/khoanh.php';
if (isset($_GET['id'])) {
  $idSp = $_GET['id'];
  $listanh = loadAnhTheoIdSanPham($_GET['id']);
  require_once 'view/sanpham/add_storage.php';
} else {
  require_once './model/khoanh.php';
  $id = $_POST['id'];
  if (isset($_POST['themkhoanh'])) {
    $TongSoHinhAnh = count($_FILES['hinhanh']['name']);
    $arrayHinhAnh = [];
    for ($i = 0; $i < $TongSoHinhAnh; $i++) {
      $tenHinhAnh = $_FILES['hinhanh']['name'][$i];
      $duongDanAnh = $_FILES['hinhanh']['tmp_name'][$i];

      $tenMoi = uniqid() . '.' . $tenHinhAnh;
      move_uploaded_file($duongDanAnh, '../upload/' . $tenMoi);
      $arrayHinhAnh[] = $tenMoi;
    }
    foreach ($arrayHinhAnh as $ten){
      insert_khoanh($id, $ten);
    }
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=themkhoanh&id=$id';</script>";
    exit;
  }
}

