      <!-- Footer -->

      <footer class="footer">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 footer_col">
                      <div class="footer_column footer_contact">
                          <div class="logo_container">
                              <div class="logo"><a href="#">TechBoys</a></div>
                          </div>
                          <div class="footer_title">Trực tuyến 24/7</div>
                          <div class="footer_phone">+938194069</div>
                          <div class="footer_contact_text">
                              <p>techboys@gmail.com</p>
                              <p>271 lê thánh tông</p>
                          </div>
                          <div class="footer_social">
                              <ul>
                                  <li>
                                      <a href="https://www.facebook.com/profile.php?id=61558226756744"><i class="fab fa-facebook-f"></i></a>
                                  </li>
                                  <li>
                                      <a href="https://twitter.com/le_fpl42422"><i class="fab fa-twitter"></i></a>
                                  </li>
                                  <li>
                                      <a href="https://www.youtube.com/channel/UCMv4Zi3pXvE_8n_KxnDV09Q"><i class="fab fa-youtube"></i></a>
                                  </li>
                                  <li>
                                      <a href="https://www.google.com"><i class="fab fa-google"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-2 offset-lg-2">
                      <div class="footer_column">
                          <div class="footer_title">
                              <h4>Tìm kiếm nhanh</h4>
                          </div>
                          <div class="footer_title">Nhà sản xuất</div>
                          <ul class="footer_list">
                              <?php
                                require_once './view/header.php';
                                require_once "model/timkiem.php";
                                require_once "model/sanpham.php";
                                $name = 'name';
                                $brands = brands();
                                $listSanPham = find_brands($name);
                                $timkiem = count_sanpham_name($name); // 
                                // Đổi mảng 2 chiều sang chuỗi
                                $tongsp = $timkiem[0][0];

                                foreach ($brands as $item) {
                                ?>
                                  <li class="brand"><a href="index.php?act=brands&name=<?php echo $item['nha_san_xuat']  ?>">Thương Hiệu <?php echo $item['nha_san_xuat'] ?></a></li>
                              <?php
                                }
                                ?>
                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-2">
                      <div class="footer_column">
                          <div class="footer_title">
                              <h4>ㅤ</h4>
                          </div>
                          <div class="footer_title">Danh mục sản phẩm</div>

                          <ul class="footer_list footer_list_2">
                              <?php
                                require_once "model/danhmuc.php";
                                $listdanhmuc = list_danhmuc();
                                foreach ($listdanhmuc as $key => $item) {
                                ?>
                                  <li><a href="index.php?act=chitietdanhmuc&id=<?= $item['id_danhmuc'] ?>"><?= $item['ten_danhmuc'] ?></a></li>
                              <?php } ?>
                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-2">
                      <div class="footer_column">
                          <div class="footer_title">
                              <h4>ㅤ</h4>
                          </div>
                          <div class="footer_title">Chăm sóc khách hàng</div>
                          <ul class="footer_list">
                              <li><a href="index.php?act=thongtin&id=<?=$_SESSION['user']['id_taikhoan']?>">Tài khoản</a></li>
                              <li><a href="http://localhost/test/thucung1/index.php?act=lichsumua">Theo dõi đơn hàng</a></li>
                              <li><a href="http://localhost/test/thucung1/index.php?act=lienhe">Liên hệ hỗ trợ</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </footer>

      <!-- Copyright -->

      <div class="copyright">
              <div class="row">
                  <div class="col">
                      <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                          <div class="copyright_content">
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              Copyright &copy;
                              <script>
                                  document.write(new Date().getFullYear());
                              </script>
                              TechBoys

                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          </div>
                          <div class="logos ml-sm-auto">
                              <ul class="logos_list">
                                  <li>
                                      <a href="#"><img src="images/logos_1.png" alt="" /></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src="images/logos_2.png" alt="" /></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src="images/logos_3.png" alt="" /></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src="images/logos_4.png" alt="" /></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="styles/bootstrap4/popper.js"></script>
      <script src="styles/bootstrap4/bootstrap.min.js"></script>
      <script src="plugins/greensock/TweenMax.min.js"></script>
      <script src="plugins/greensock/TimelineMax.min.js"></script>
      <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
      <script src="plugins/greensock/animation.gsap.min.js"></script>
      <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
      <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
      <script src="plugins/slick-1.8.0/slick.js"></script>
      <script src="plugins/easing/easing.js"></script>
      <script src="js/custom.js"></script>
      <!-- Blog -->
      <script src="plugins/parallax-js-master/parallax.min.js"></script>
      <script src="plugins/easing/easing.js"></script>
      <script src="js/blog_custom.js"></script>
      <!-- Giỏ hàng -->
      <script src="js/cart_custom.js"></script>
      <!-- Cửa hàng -->
      <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
      <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
      <script src="js/shop_custom.js"></script>
      <!-- Liên hệ -->
      <script src="js/contact_custom.js"></script>
      <!-- Chi tiết sản phẩm -->
      <script src="js/product_custom.js"></script>
      <!-- blog chi tiet -->
      <script src="js/blog_single_custom.js"></script>
      </body>
      <script src="js/rating.js"></script>

      </html>