<?php
require_once "pdo.php";
// Hiển thị toàn bộ voucher
function list_voucher()
{
    $sql = "SELECT * FROM voucher";
    return pdo_query($sql);
}
// Thêm mới voucher
function them_voucher($tenvoucher,$giagiam,$mavoucher,$start,$end)
{
    $sql = "INSERT INTO voucher(ten_voucher,giagiam,ma_voucher,ngaybatdau,ngayketthuc) VALUES ('$tenvoucher','$giagiam','$mavoucher','$start','$end')";
    pdo_execute($sql);
}
// Xoá voucher
function xoa_voucher($id)
{
    $sql = "DELETE FROM voucher WHERE id_voucher = '$id'";
    pdo_execute($sql);
}
// Hiển thị voucher theo id voucher
function list_motvoucher($id)
{
    $sql = "SELECT * FROM voucher WHERE id_voucher =$id";
    return pdo_query_one($sql);
}
// Sửa voucher
function update_voucher($id, $tenvoucher, $giagiam,$mavoucher,$start,$end)
{
    $sql = "UPDATE `voucher` SET `ten_voucher` = '$tenvoucher', `giagiam` ='$giagiam' , `ma_voucher`=  '$mavoucher', `ngaybatdau` ='$start' , `ngayketthuc` ='$end' WHERE id_voucher = '$id'";
    pdo_execute($sql);
}
?>