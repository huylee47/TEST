<!-- Banner -->

<div class="banner">
    <div class="banner_background" style="background-image: url(images/banner_background.jpg)"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image">
                <img src="images/zflip.png"  alt="" />
            </div>
            <div class="banner_product_image_l">
                <img src="images/ip.png"  alt="" width="230px" height="400px"/>
            </div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">Siêu ưu đãi </h1>
                    <div class="banner_price"><span>$999</span>$888</div>
                    <div class="banner_product_name">Điện thoại di động </div>
                    <div class="button banner_button"><a href="http://localhost/PRO1014/Techboys/index.php?act=chitiet_sanpham&id=7">Mua Ngay</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Characteristics -->

<div class="characteristics">
    <div class="container">
        <div class="row">
            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">
                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon">
                        <img src="images/char_1.png" alt="" />
                    </div>
                    <div class="char_content">
                        <div class="char_title">Miễn phí vận chuyển</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">
                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon">
                        <img src="images/char_2.png" alt="" />
                    </div>
                    <div class="char_content">
                        <div class="char_title">Đổi hàng nhanh chóng</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">
                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon">
                        <img src="images/char_3.png" alt="" />
                    </div>
                    <div class="char_content">
                        <div class="char_title"> Hoàn tiền</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">
                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon">
                        <img src="images/char_4.png" alt="" />
                    </div>
                    <div class="char_content">
                        <div class="char_title"> Bảo hành 12 tháng</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deals of the week -->

<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">Sản phẩm giảm giá sốc</div>
                    <div class="deals_slider_container">
                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">
                            <!-- Deals Item -->
                            <div class="owl-item deals_item">
                                <div class="deals_image">
                                    <a href="index.php?act=chitiet_sanpham&id=<?php echo $motsanpham['id_sanpham'] ?>"><img src="/PRO1014/Techboys/upload/<?php echo $motsanpham['img'] ?>" alt="" /></a>
                                </div>
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category">
                                            <a href="#">Headphones</a>
                                        </div>
                                        <div class="deals_item_price_a ml-auto">$300</div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name"><?php  echo $motsanpham['ten_sanpham']?></div>
                                        <div class="deals_item_price ml-auto">$<?php  echo $motsanpham['gia']?></div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">
                                                Đã bán: <span>6</span>
                                            </div>
                                            <div class="sold_title ml-auto">
                                            <p>Hàng còn: 
                                                <span> <?php echo $motsanpham['so_luong'] ?></span>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="available_bar">
                                            <span style="width: 17%"></span>
                                        </div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Thời gian còn lại</div>

                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_hr" class="deals_timer_hr"></div>

                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_min" class="deals_timer_min"></div>

                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_sec" class="deals_timer_sec"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav">
                            <i class="fas fa-chevron-left ml-auto"></i>
                        </div>
                        <div class="deals_slider_next deals_slider_nav">
                            <i class="fas fa-chevron-right ml-auto"></i>
                        </div>
                    </div> -->
                </div>

                <!-- Featured -->
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Sản phẩm</li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider">
                                <!-- Slider Item -->
                                <?php
                                foreach ($listsanpham as $item) {
                                ?>
                                    <div class="featured_slider_item">

                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <a href="index.php?act=chitiet_sanpham&id=<?= $item['id_sanpham'] ?>">
                                                    <img width="150px" height="120px" src="/PRO1014/Techboys/upload/<?php echo $item['img'] ?>" /></a>

                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount">
                                                    $<?= $item['gia'] ?>

                                                </div>
                                                <div class="product_name">
                                                    <div>
                                                        <a href="index.php?act=chitiet_sanpham&id=<?= $item['id_sanpham'] ?>"><?= $item['ten_sanpham'] ?></a>
                                                    </div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">
                                                        <a href="index.php?act=giohang&id=<?= $item['id_sanpham'] ?> " style="color: white;"> Thêm vào giỏ hàng </a>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product_fav">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>


                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

   <br><br><br><br>   <br><br><br><br>
    

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Mặt hàng bán chạy</div>
                            <ul class="clearfix">
                                <li class="active"></li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">
                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">
                                <?php
                                foreach ($listsanpham as $item) {
                                ?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image">
                                                <img src="/PRO1014/Techboys/upload/<?php echo $item['img'] ?>" alt="" />
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category">
                                                    <a href="#">Headphones</a>
                                                </div>
                                                <div class="bestsellers_name">
                                                    <a href="index.php?act=chitiet_sanpham&id=<?= $item['id_sanpham'] ?>"><?= $item['ten_sanpham'] ?></a>
                                                </div>

                                                <div class="bestsellers_price discount">
                                                    $<?= $item['gia'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">
                                                -25%
                                            </li>
                                            <li class="bestsellers_mark bestsellers_new">new</li>
                                        </ul>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adverts -->



            <!-- Trends -->

            <div class="trends">
                <div class="trends_background" style="background-image: url(images/trends_background.jpg)"></div>
                <div class="trends_overlay"></div>
                <div class="container">
                    <div class="row">
                        <!-- Trends Content -->
                        <div class="col-lg-3">
                            <div class="trends_container">
                                <h2 class="trends_title">Những sản phẩm của năm</h2>
                                <div class="trends_text">
                                    <p>
                                        Những sản phẩm được bán chạy cũng như được đánh giá cao nhất của cửa hàng chúng tôi
                                    </p>
                                </div>
                                <div class="trends_slider_nav">
                                    <div class="trends_prev trends_nav">
                                        <i class="fas fa-angle-left ml-auto"></i>
                                    </div>
                                    <div class="trends_next trends_nav">
                                        <i class="fas fa-angle-right ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Trends Slider -->
                        <div class="col-lg-9">
                            <div class="trends_slider_container">
                                <!-- Trends Slider -->

                                <div class="owl-carousel owl-theme trends_slider">
                                    <!-- Trends Slider Item -->
                                    <?php
                                    foreach ($listsanpham as $item) {
                                    ?>
                                        <div class="owl-item">
                                            <div class="trends_item is_new">
                                                <div class="trends_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/PRO1014/Techboys/upload/<?php echo $item['img'] ?>" alt="" />
                                                </div>
                                                <div class="trends_content">
                                                    <div class="trends_category">
                                                        <a href="#">Smartphones</a>
                                                    </div>
                                                    <div class="trends_info clearfix">
                                                        <div class="trends_name">
                                                            <a href="index.php?act=chitiet_sanpham&id=<?= $item['id_sanpham'] ?>"><?= $item['ten_sanpham'] ?></a>
                                                        </div>
                                                        <div class="trends_price">$<?= $item['gia'] ?></div>
                                                    </div>
                                                </div>
                                                <ul class="trends_marks">
                                                    <li class="trends_mark trends_discount">-25%</li>
                                                    <li class="trends_mark trends_new">new</li>
                                                </ul>
                                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="brands">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 style=" color: gray;">Những nhà tài trợ</h3>
                            <div class="brands_slider_container">
                                <!-- Brands Slider -->

                                <div class="owl-carousel owl-theme brands_slider">
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_1.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_2.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_3.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_4.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_5.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_6.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_7.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center">
                                            <img src="images/brands_8.png" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Brands Slider Navigation -->
                                <div class="brands_nav brands_prev">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="brands_nav brands_next">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->