
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dangnhap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Techboys | Login</title>
</head>
<body>
<div class="container">
  <h2>Đăng nhập</h2>
  <form action="" method="post">
    <div class="input-group">
      <label>Tên đăng nhập:</label>
      <input type="text"  name="user" required>
    </div>
    <div class="input-group">
      <label>Mật khẩu:</label>
      <input type="password" name="password" required>
    </div>
    <button type="submit" class="btn" name="dangnhap">Đăng nhập</button>
  </form>
  <div class="social-icons">
    <a href="test.php"><i class='bx bxl-facebook'></i></a>
    <a href="test.php"><i class='bx bxl-google'></i></a>
    <a href="test.php"><i class='bx bxl-twitter'></i></a>
  </div>
  <p>Chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký ngay</a></p><br>
  <a href="index.php?act=quenmatkhau">Quên mật khẩu</a>
</div>
</body>
</html>
