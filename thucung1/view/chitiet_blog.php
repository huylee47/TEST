<head>
<link rel="stylesheet" type="text/css" href="styles/blog_single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
</head>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/test/thucung1/upload/<?php echo $mottintuc['img'] ?>" data-speed="0.8"></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title"></div>
					<div class="single_post_text">
						<p><?php
						echo $mottintuc['noidung'];
						?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog Posts -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

						<!-- Blog post -->
						<?php
						foreach ($listTinTucAll as $key => $item) {
						?>
						<div class="blog_post">
								<div><img class="blog_image" src="/test/thucung1/upload/<?php echo $item['img']?>"></img></div>
								<div class="blog_text"><?=$item['tieude']?></div>
								<div class="blog_button"><a href="index.php?act=chitiettintuc&&id=<?=$item['id_tintuc']?>">Đọc</a></div>
						</div>
						<?php } ?>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
