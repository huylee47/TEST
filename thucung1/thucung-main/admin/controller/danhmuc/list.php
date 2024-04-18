<?php

// B1 lấy dữ liệu từ DB -> Giao cho model
include "model/danhmuc.php";

$listDanhMuc = lay_danhmuc_tudb();

// B2 xử lý dữ liệu -> Giao cho controller

// B3 đưa dữ liệu ra màn hình -> Giao cho view

include "view/danhmuc/list.php";
