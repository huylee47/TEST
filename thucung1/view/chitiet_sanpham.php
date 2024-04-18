<head>
    <link rel="stylesheet" type="text/css" href="styles/product_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
?>
<script type="text/javascript">
    var star = "<?php echo $trungBinhMang; ?>";
</script>


<div class="single_product">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <?php 
                    foreach ($listanh as $img){
                    ?>
                    <!-- <li data-image="images/single_4.jpg"><img src="images/single_4.jpg" alt=""></li>
                    <li data-image="images/single_2.jpg"><img src="images/single_2.jpg" alt=""></li>
                    <li data-image="images/single_3.jpg"><img src="images/single_3.jpg" alt=""></li> -->
                    <li data-image="/test/thucung1/upload/<?php echo $img['ten_anh']?>"><img src="/test/thucung1/upload/<?php echo $img['ten_anh']?>" alt=""></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"> <img src="/test/thucung1/upload/<?php echo $listSanPham['img'] ?>"></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">Laptops</div>
                    <div class="product_name"><?php echo $listSanPham['ten_sanpham'] ?></div>
                    <div class="rating_r" id="rate">
                        <!-- <i></i><i></i><i></i><i></i><i></i> --> 
                    </div>
                 
                    <span> <p>Đánh giá (<?= $trungBinhso ?>/5)</p> </span>
                    <div class="product_text">
                        <h4>Cấu Hình</h4>
                        <p><?php echo $listSanPham['ghichu'] ?></p>
                        <p> Số lượng :<?php echo $listSanPham['so_luong']?> sản phẩm</p>
                    </div>
                    <div class="order_info d-flex flex-row">
                        <form action="#">
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Số lượng: </span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>

                                <!-- Product Color -->
                                <ul class="product_color">
                                    <li>
                                        <span>Color: </span>
                                        <div class="color_mark_container">
                                            <div id="selected_color" class="color_mark"></div>
                                        </div>
                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                        <ul class="color_list">
                                            <li>
                                                <div class="color_mark" style="background: #999999;"></div>
                                            </li>
                                            <li>
                                                <div class="color_mark" style="background: #b19c83;"></div>
                                            </li>
                                            <li>
                                                <div class="color_mark" style="background: #000000;"></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="product_price">$<?php echo $listSanPham['gia'] ?></div>
                            <div class="button_container">
                                <button type="button" class="button cart_button"><a href="index.php?act=giohang&id=<?= $listSanPham['id_sanpham'] ?>">Add to Cart</a></button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php if (isset($_SESSION['user'])) { ?>
    <div class="container">
        <div >
            <h2>Bình Luận</h2>
            <form action="index.php?act=thembinhluan" method="POST">
        </div>
            <textarea class="exampleFormControlTextarea" name="noidung" id="" cols="100" rows="2" placeholder="Viết bình luận"></textarea>
            <br>
            <input type="hidden" name="idnguoidung" value="<?php echo $_SESSION['user']['id_taikhoan']; ?>">
            <input type="hidden" name="idsanpham" value="<?= $id_sp ?>">
            <input type="hidden" name="sosao" id="soSao" value="5">
            <span>Đánh Giá :</span>
            <span id="onestar"  onmouseover="checkStar1()" onclick="checkStar1()" class="fa fa-star checked"></span>
            <span id="twostars"  onmouseover="checkStar2()" onclick="checkStar2()" class="fa fa-star checked"></span>
            <span id="threestars"  onmouseover="checkStar3()" onclick="checkStar3()" class="fa fa-star checked"></span>
            <span id="fourstars"  onmouseover="checkStar4()" onclick="checkStar4()" class="fa fa-star checked"></span>
            <span id="fivestars"  onmouseover="checkStar5()" onclick="checkStar5()" class="fa fa-star checked"></span>
            <br>
            <button id="thembinhluan" class="btn btn-primary">Gửi bình luận</button>
        </form>
    </div>
    <div class="context">
    <?php } else { ?>
        <div>
            <div class="container text-center">
                <div class="">
                    <br>
                    <div class="banner">
                        <h5 class="title">BẠN PHẢI ĐĂNG NHẬP ĐỂ BÌNH LUẬN</h5>
                    </div>

                    <div class="contextl"> <button class="btn btn-outline-primary btn-sm"><a class="log" href="index.php?act=dangnhap">Đăng nhập</a></button></div>
                    <div>
                        <p class="contextrr">Chưa có tài khoản ?</p>
                        <div class="contextr">
                            <button class="btn btn-outline-primary btn-sm"><a class="log" href="index.php?act=dangky">Đăng ký</a></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    </div>
    <div class="container ">
        <br>
        <div>
            <h2>Danh sách bình luận</h2>
        </div>
        <div class="khungbinhluan ">
            <?php
            foreach ($listbl as $item) {
                $ngayTao = $item['ngaytao'];
                $date_time = new DateTime($ngayTao);
                $ngayTao = $date_time->format('Y-m-d');
            ?>
                <div class="chitietbinhluan row">
                    <div class="avatar col-1"><img class="ava" src="/test/thucung1/upload/user.png" alt=""></div>
                    <div class="hoten_binhluan col-2"><span><?= get_ten_theo_id($item['id_taikhoan']) ?></span> </div>
                    <div class="ngaygio_binhluan col-2"><span><?= $ngayTao ?></span></div>
                    <div class="noidung_binhluan col-5"><?= $item['noidung'] ?> </div>
                    <div class="danhgia_binhluan col-2">
                        <?php
                            for($i = 0; $i < $item['danhgia']; $i++) {
                        ?>
                        <i class="fa fa-star checked"></i>
                        <?php
                            }
                        ?>    
                    </div>

                </div>

            <?php
            }
            ?>
        </div>
    </div>

    <!-- Recently Viewed -->
    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Recently Viewed</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">
                            <?php
                            foreach ($listsanpham as $item) {
                            ?>
                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="/test/thucung1/upload/<?php echo $item['img'] ?>" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price"><?= $item['gia'] ?></div>
                                            <div class="viewed_name"><a href="index.php?act=chitiet_sanpham&id=<?= $item['id_sanpham'] ?>"><?= $item['ten_sanpham'] ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div>
                            </div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/product_custom.js"></script>
