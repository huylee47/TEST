<?php

require_once './model/khoanh.php';
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $id_anh = $_GET['id'];
    xoa_anh($id_anh);
  }
  echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listsanpham';</script>";