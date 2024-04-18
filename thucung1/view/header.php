<!DOCTYPE html>
<html lang="en">
<!-- aaaaaaaaaaa -->

<head>
    <title>TechBoys Trang chủ</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="OneTech shop project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css" />
    <link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
    <link rel="stylesheet" type="text/css" href="styles/comment.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .checked {
            color: orange;
        }

        #rate .fa {
            font-size: 28px;
            padding-right: 5px;
        }
        .no-arrow.dropdown-toggle::after {
    display: none;
}



        
    </style>
</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon">
                                    <img src="images/phone.png" alt="" />
                                </div>
                                +938194069
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon">
                                    <img src="images/mail.png" alt="" />
                                </div>
                                <a href="mailto:fastsales@gmail.com">techboys@gmail.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <?php
                                if (isset($_SESSION['user'])) {
                                ?>
                                    <div class="dropdown mr-1">
                                        <button type="button" class="btn btn-light dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false" data-offset="10,20">
                                        <i class="fas fa-user"></i>
                                        <?php echo strtoupper($_SESSION['user']['user'])?>
                                        </button>
                                        <div class="dropdown-menu">
                                        <?php
                                            if (isset($_SESSION['user']['quyen']) && $_SESSION['user']['quyen'] == '1') {
                                            ?>
                                                <a class="dropdown-item" href="http://localhost/test/thucung1/admin/">Admin</a>
                                            <?php
                                            }
                                            ?>
                                        <a class="dropdown-item" href="index.php?act=thongtin">Thông tin tài khoản</a>

                                            <a class="dropdown-item" href="index.php?act=lichsumua">Lịch sử mua hàng</a>
                                            <a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a>

                                        </div>
                                    </div>
                                <?php } else {
                                ?>
                                    <div class="top_bar_user">
                                        <div class="user_icon">
                                            <img src="images/user.svg" alt="" />
                                        </div>
                                        <div><a href="index.php?act=dangky">Đăng ký</a></div>
                                        <div><a href="index.php?act=dangnhap">Đăng nhập</a></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="index.php">TechBoys</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="index.php" class="header_search_form clearfix">
                                            <input type="hidden" name="act" value="timkiem">
                                            <input type="text" required="required" class="header_search_input" name="tukhoa" placeholder="Tìm kiếm" />
                                            <div>
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc"></span>

                                                    <ul class="custom_list clc">
                                                        <li>
                                                            <a class="clc" href="#">Tất cả sản phẩm</a>
                                                        </li>
                                                        <li><a class="clc" href="#">Máy tính bàn</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Thiết bị ngoại vi</a></li>
                                                        <li><a class="clc" href="#">Điện thoại di động</a></li>
                                                        <li><a class="clc" href="#">Consoles</a></li>
                                                        <li><a class="clc" href="#">Thiết bị nghe nhìn</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300">
                                                <img src="images/search.png" alt="" />
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">


                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <img src="images/icons8-shop-32.png" alt="" />

                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="index.php?act=showgiohang">Giỏ hàng</a></div>
                                            <div class="cart_price">
                                                <?php
                                                include_once 'model/giohang.php';
                                                $tongtien = 0;
                                                if (isset($_SESSION['user'])) {
                                                    $id = $_SESSION['user']['id_taikhoan'];
                                                    $gioHangs = layChiTietGioHang($id);
                                                    foreach ($gioHangs as $item) {
                                                        $tongtien += $item['gia'] * $item['soluong'];
                                                    }
                                                } else {
                                                    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                                        $gioHangs = $_SESSION['giohang'];
                                                        foreach ($gioHangs as $item) {
                                                            $tongtien += $item['gia'] * $item['soluong'];
                                                        }
                                                    }
                                                }

                                                echo $tongtien;


                                                ?>đ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main_nav_content d-flex flex-row">
                                <!-- Categories Menu -->
                                <div class="cat_menu_container">
                                    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text">Danh mục sản phẩm</div>
                                    </div>
                                    <ul class="cat_menu">
                                        <?php
                                        require_once "model/danhmuc.php";
                                        $listdanhmuc = list_danhmuc();
                                        foreach ($listdanhmuc as $key => $item) {
                                        ?>
                                            <li><a href="index.php?act=chitietdanhmuc&id=<?= $item['id_danhmuc'] ?>"><?= $item['ten_danhmuc'] ?><i class="fas fa-chevron-right"></i></a></li>
                                        <?php } ?>

                                    </ul>
                                </div>


                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li>
                                            <a href="index.php">Trang chủ<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=cuahang">Cửa hàng<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=blog">Tin tức<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=lienhe">Liên hệ<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->


                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

        </header>