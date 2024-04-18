<?php
require_once "model/taikhoan.php";
$listaccount= list_account();
$id_acc=$_GET['id'];
$trangthai = get_account($id_acc);
if(isset($_GET['id'])){
if($trangthai = 2){
    unlock_account($id_acc);
        echo "
    <script>
        window.location.href = 'index.php?act=taikhoan'
    </script>";
}else{
    echo "<script>alert('Tài khoản không bị khoá trước đó');</script>";
    echo "
    <script>
    window.location.href = 'index.php?act=taikhoan'
    </script>";
}
} 


?>