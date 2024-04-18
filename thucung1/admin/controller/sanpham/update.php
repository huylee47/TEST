<?php
require_once './model/sanpham.php';
require_once './model/danhmuc.php';
$listdanhmuc = list_danhmuc();
if(isset($_GET['id'])){
    $id_sp=$_GET['id'];
    $motsanpham= sanpham($id_sp);
    require_once 'view/sanpham/update.php';
}
if (isset($_POST['suasanpham'])) {
    $id_sp = $_POST['id'];
    $id_dm=$_POST['id_dm'] ;
    $tensp=$_POST['tensp'] ;
    $gia=$_POST['gia'] ;                        
    $hinhanh= $_FILES['hinhanh']['name'];
    $ghichu= $_POST['ghichu'];
    $soluong=$_POST['soluong'];
    $NSX=$_POST['NSX'];
    $xuatxu=$_POST['xuatxu']; 
    if(isset($_FILES['hinhanh'])){
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../upload/'.$hinhanh);
    sua_sanpham($id_dm,$id_sp,$tensp,$gia,$hinhanh,$ghichu,$soluong,$NSX,$xuatxu);
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listsanpham';</script>";
    exit;
}

}
?>