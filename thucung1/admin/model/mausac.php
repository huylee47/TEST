<?php
 require_once 'pdo.php';
 function mausac(){
     $sql="select * from mausac";
     return pdo_query($sql);
 }
 function mausac_id($id_mausac){  
     $sql="SELECT * from mausac WHERE id_mausac='$id_mausac'";
     return pdo_query_one($sql)['ten_mausac'];
 }
?>