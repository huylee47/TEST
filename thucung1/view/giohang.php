<head>
	<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<!-- Cartnnnnnnnnnnnnnnnnnnnnnn -->
<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="cart_container">
					<div class="cart_title">Giỏ hàng</div>
					<form id="formdathang" action="index.php?act=dathang" method="post">
						<table class="table">
							<tr>
								<th>Tên sản phẩm</th>
								<th>Hình ảnh</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th></th>
							</tr>
							<?php
							if (isset($gioHangs)) {
								foreach ($gioHangs as $key => $item) {
							?>
									<tr>
										<td><?= $item['ten_sanpham'] ?></td>
										<td><img width="50" height="50" src="upload/<?php echo $item['img'] ?>" alt=""></td>
										<td><?php echo $item['gia'] ?></td>
										<td class="centered"><input name="<?= $item['id_sanpham'] ?>" type="number" min="1" value="<?= $item['soluong'] ?>" onchange="capNhapGioHang(this.name, this.value)"></td>
										<td><?= $item['soluong'] * $item['gia'] ?>đ</td>

										<td><a class="btn btn-primary" href="index.php?act=xoasanpham&id=<?= $item['id_sanpham'] ?>">Xóa</a></td>
									</tr>
							<?php
								}
							}
							?>
						</table>

						<!-- Order Total -->

						<br><br>
						<h3>Thông tin khách hàng</h3>
						<div>
							<label for="">Họ tên</label>
							<input required type="text" name="ten" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['ten'] : ""; ?>">
						</div>
						<div>
							<label for="">Số điện thoại</label>
							<input required type="text" name="sdt" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['SDT'] : ""; ?>">
						</div>
						<div>
							<label for="">Địa chỉ</label>
							<input required type="text" name="diachi" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['diachi'] : ""; ?>">
						</div>
						<div>
							<label for="">Ghi chú</label>
							<input required type="text" name="ghichu">
						</div>

				</div>

				<div class="tongtien">
					<h3>Tổng tiền giỏ hàng</h3>
					<p><span>Tiền tạm tính</span> <span><?= $tongtien ?>đ</span></p>
					<p>
						<span>Voucher</span>
						<span>
							<input maxlength="8" minlength="8" id="voucher" name="voucher" type="text">
							<span style="background-color: yellow; color: black;" id="message" class="badge badge-warning">a</span>
						</span>

					</p>
					<p><span>Phương thức thanh toán</span> <span>
							<select name="pttt" class="voucher" required>
								<option value=""></option>
								<option value="1">chuyển khoản</option>
								<option value="2">tiền mặt</option>
								<!-- Thêm các phương thức thanh toán khác tại đây -->
							</select></span></p>
					<div class="total">
						<p><span>Tổng tiền</span><span name="tongtien" id="tongtien"><?= $tongtien ?>đ</span></p>
						<input type="hidden" name="tongtien" value="<?= $tongtien ?>">
					</div>

				</div>
				<div class="cart_buttons">
					<button type="submit" class="button cart_button_checkout">Đặt hàng</button>
				</div>
			</div>
		</div>
	</div>

</div>
</form>
<!-- Newsletter -->
<script src="js/cart_custom.js"></script>
<script>
	$('#message').hide();
	$('#voucher').on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			e.preventDefault();
			return false;
		}
	});
	var tongTien = $('#tongtien').text();
	$('#voucher').change(function() {
		$('#tongtien').text(tongTien);
		var voucher = $('#voucher').val();
		if (voucher.length == 8) {
			console.log($('#voucher').val());
			$.ajax({
				type: "POST",
				url: "index.php?act=checkvoucher",
				data: {
					voucher: voucher,
				},
				success: function(response) {
					// console.log(response.message);
					$('#message').text(response.message);
					$('#message').show();
					let tienGiam = tongTien;
					tienGiam = tienGiam.replace('đ', '');
					tienGiam = tienGiam - tienGiam * response.giagiam / 100;
					$('#tongtien').text(tienGiam + 'đ');
				},
				error: function(response, status, error) {
					var errorMessage = JSON.parse(response.responseText);
					$('#message').text(errorMessage.message);
					$('#message').show();
				}
			})
		}

	});

	function capNhapGioHang(idSp, soLuong) {
		console.log(idSp);
		console.log(soLuong);
		$.ajax({
			type: "POST",
			url: "index.php?act=capnhatgiohang",
			data: {
				id_sanpham: idSp,
				soluong: soLuong
			},
			success: function(response) {
				window.location.reload();
			},
			error: function(response, status, error) {}
		})
	}
</script>