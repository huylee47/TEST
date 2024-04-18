
		<!-- Main Navigationnnnnnnnnnnnnnnnnnnnnnnnn -->
<head>
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">
</head>
		
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Sản phẩm</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Lọc</div>
							<div class="sidebar_subtitle">Giá</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Từ: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
					
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
							<?php
						          foreach( $brands as $item){
								?>
									<li class="brand"><a href=""><?php echo $item['nha_san_xuat'] ?></a></li>
								<?php
								  }
								?>
								<!-- <li class="brand"><a href="#">Apple</a></li>
								<li class="brand"><a href="#">Beoplay</a></li>
								<li class="brand"><a href="#">Google</a></li>
								<li class="brand"><a href="#">Meizu</a></li>
								<li class="brand"><a href="#">OnePlus</a></li>
								<li class="brand"><a href="#">Samsung</a></li>
								<li class="brand"><a href="#">Sony</a></li>
								<li class="brand"><a href="#">Xiaomi</a></li> -->
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
						<div class="shop_product_count"><span> <?php echo $tongsp ?></span> sản phẩm </div>
						
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>
                            <?php
							foreach ($listsanphamtheoiddm as $sanpham){
							?>
							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center">
								<a href="index.php?act=chitiet_sanpham&id=<?=$sanpham['id_sanpham']?>">
								<img src="/PRO1014/Techboys/upload/<?php echo $sanpham['img'] ?>" alt=""></a>
									</div>
								<div class="product_content">
									<div class="product_price"><?=$sanpham['gia']?></div>
									<div class="product_name"><div><a href="index.php?act=chitiet_sanpham&id=<?=$sanpham['id_sanpham']?>"><?=$sanpham['ten_sanpham']?></a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
							<?php } ?>
						</div>
						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>