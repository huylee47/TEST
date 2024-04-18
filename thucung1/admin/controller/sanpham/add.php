<?php
require_once './model/sanpham.php';
require_once './model/danhmuc.php';
require_once './model/mausac.php';
$listdanhmuc = list_danhmuc();
$listmausac  = mausac();
require_once 'view/sanpham/add.php';
if (isset($_POST['themsanpham'])   ) {
    if (
       preg_match('/[^\p{Z}\r\n]+/u', $_POST['tensp'] )
    && preg_match('/[^\p{Z}\r\n]+/u', $_POST['gia'] )
    && preg_match('/[^\p{Z}\r\n]+/u', $_POST['ghichu'] )
    && preg_match('/[^\p{Z}\r\n]+/u', $_POST['soluong'] )
    && preg_match('/[^\p{Z}\r\n]+/u', $_POST['NSX'] )
    && preg_match('/[^\p{Z}\r\n]+/u', $_POST['xuatxu'] )
    ){
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
}
    $id_sp = themsanpham($id_dm,$tensp,$gia,$hinhanh,$ghichu,$soluong,$NSX,$xuatxu);  
}
else{
    echo "<script>alert('Thêm sản phẩm thất bại');</script>";
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=themsanpham';</script>";
}
} 

   

