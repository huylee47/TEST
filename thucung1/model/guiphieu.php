<?php
require_once "model/pdo.php";
// Tạo mới phiếu liên hệ 
function guiphieu($ten,$sdt,$gmail,$noidung){
    $sql="INSERT INTO lienhe(ten,sdt,gmail,noidung) VALUES ('$ten','$sdt','$gmail','$noidung')";
    pdo_execute($sql);
}

?>