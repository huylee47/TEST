<?php
 require_once 'pdo.php';
 function mausac(){
     $sql="select * from mausac";
     return pdo_query($sql);
 }
?>