<head>
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />

</head>
		
		
		<!-- Menu 


	<!-Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Số điện thoại</div>
								<div class="contact_info_text">+938194069</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text"> shoptechboys@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Địa chỉ</div>
								<div class="contact_info_text">271 Lê Thánh Tông,Máy Tơ, Ngô Quyền, Hải Phòng</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Phiếu yêu cầu</div>

						<form action="index.php?act=lienhe" method="post">
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text"  name="ten" style="color: black;" class="contact_form_name input_field" placeholder="Tên của bạn" required="required" data-error="Name is required." value="<?=isset($_SESSION['user']) ? $_SESSION['user']['ten']: ""; ?>">
								<input type="text" name="gmail"style="color: black;" class="contact_form_email input_field" placeholder="Email của bạn" required="required" data-error="Email is required."value="<?=isset($_SESSION['user']) ? $_SESSION['user']['email']: ""; ?>">
								<input type="text" name="sdt" style="color: black;" class="contact_form_phone input_field" placeholder="Số điện thoại" required="required" value="<?=isset($_SESSION['user']) ? $_SESSION['user']['SDT']: ""; ?>">	
							</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" name="noidung"  class="text_field contact_form_message" name="message" style="color: black;" rows="4" placeholder="Tin nhắn" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button" name="guiphieu">Gửi phiếu</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Newsletter -->

	
