<?php
require_once './view/header.php';
require_once "model/guiphieu.php";
require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['guiphieu'])){
    $ten = $_POST['ten'];
    $sdt = $_POST['sdt'];
    $gmail = $_POST['gmail'];
    $noidung= $_POST['noidung'];
    guiphieu($ten,$sdt,$gmail,$noidung);

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;                                
        $mail->isSMTP();                                      
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;                              
        $mail->Username   = 'shoptechboys@gmail.com';                 
        $mail->Password   = 'fgkz msex wmpc inuj';                           
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;                                

        //Recipients
        $mail->setFrom('shoptechboys@gmail.com', 'Mailer');
        $mail->addAddress($gmail, $ten);     

        // Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Thank you for your comments';
        $mail->Body    = 'Cảm ơn bạn đã phản hồi. Chúng tôi đánh giá cao thời gian và nỗ lực của bạn trong việc liên hệ với chúng tôi. Chúng tôi sẽ sớm đưa ra giải pháp và phản hồi lại bạn ';

        $mail->send();
        // Không hiển thị thông báo sau khi gửi
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
require_once './view/lienhe.php';
require_once './view/footer.php';
?>
