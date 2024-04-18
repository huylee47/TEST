<?php
require_once "model/taikhoan.php";
require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
include_once "./view/quenmatkhau.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['quenmatkhau'])) {
    $username = $_POST['user'];
    $quenmatkhau = quenmatkhau($username);
    
    if (is_array($quenmatkhau)) { // Check if $quenmatkhau is an array
        $ten = $quenmatkhau['ten'];
        $email = $quenmatkhau['email'];
        $password = $quenmatkhau['password'];

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'shoptechboys@gmail.com';
            $mail->Password   = 'fgkz msex wmpc inuj'; // Update with your Gmail app password
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
    
            //Recipients
            $mail->setFrom('shoptechboys@gmail.com', 'Mailer');
            $mail->addAddress($email, $ten); // Send email to the user's email address
    
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Your new password';
            $mail->Body    = 'Your new password for the account '.$ten.' is '.$password;
    
            $mail->send();
            // Display message after sending email
            echo "<script>alert('Mật khẩu mới đã được gửi vào email của bạn');</script>";
        } catch (Exception $e) {
            // Handle exception
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            var_dump($quenmatkhau);
        }
    } else {
        echo $thongbao = "<script>alert('Tên người dùng không tồn tại');</script>";
    }

}
?>
