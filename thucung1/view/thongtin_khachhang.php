<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thông tin khách hàng</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
	<!-- <link rel="stylesheet" type="text/css" href="styles/profile.css" /> -->
</head>


	<div class="container" style="padding: 200px 0 200px 0;">
		<div class="row gutters">
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<div class="card h-100">
					<div class="card-body">
						<div class="account-settings">
							<div class="user-profile">
								<div class="user-avatar">
									<img width="200px" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
								</div>
								<h5 class="user-name"><?php echo $_SESSION['user']['user'] ?></h5>
								<h6 class="user-email"><?php echo $_SESSION['user']['email'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
				<div class="card h-100">
					<div class="card-body">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2 text-primary">Thông tin</h6>
						</div>
						<form action="index.php?act=thongtin" method="post">
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="fullName">Tên</label>
										<input type="text" class="form-control" name="user" placeholder="Nhập tên" value="<?php echo $_SESSION['user']['user'] ?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="eMail">Email</label>
										<input type="email" class="form-control" name="email" placeholder="Nhập email" value="<?php echo $_SESSION['user']['email'] ?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="phone">Số điện thoại</label>
										<input type="text" class="form-control" name="sdt" placeholder="Nhập SĐT" value="<?php echo $_SESSION['user']['SDT'] ?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="website">Địa chỉ</label>
										<input type="address" class="form-control" name="diachi" placeholder="Nhập địa chỉ" value="<?php echo $_SESSION['user']['diachi'] ?>">
									</div>

								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="text-right">
										<input type="hidden" name="id" value="<?= $_SESSION['user']['id_taikhoan'] ?>">
										
										<button class="btn btn-primary" > <a style="color: #fff;" href="http://localhost/PRO1014/Techboys/index.php">Huỷ</a> </button>
										
										<button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>