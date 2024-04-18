<?php

// B1 lấy dữ liệu từ DB -> Giao cho model


// B2 xử lý dữ liệu -> Giao cho controller

// B3 đưa dữ liệu ra màn hình -> Giao cho view
if(!isset($_POST['themdanhmuc'])) {
    include "view/danhmuc/add.php";
} else {
    include "model/danhmuc.php";
    // B1 Lấy dữ liệu từ người dùng, xử lý dữ liệu -> Giao cho controller
    if(isset($_POST['ten'])) {
        $ten = $_POST['ten'];

        // B2 Cập nhật dữ liệu vào DB -> GIao cho model
        them_mot_danhmuc($ten);
    }
    header('Location: index.php?chucnang=listdanhmuc');
}
