<?php
    function dangky($user,$pass,$email) {
        $sql = "INSERT INTO `taikhoan`
                (`user`,`pass`,`email`)
                VALUES ('$user','$pass','$email')
        ";
        pdo_execute($sql);
    }

    function dangnhap($user,$pass) {
        $sql = "SELECT * FROM `taikhoan` WHERE `user` = '".$user."' AND `pass` = '".$pass."'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function dangxuat() {
        if(isset($_SESSION['hanh'])) {
            unset($_SESSION['hanh']);
        }
    }

    function capnhattaikhoan($user,$pass,$email,$address,$tel,$id) {
        $sql = "UPDATE taikhoan SET user = '".$user."', pass = '".$pass."', email = '".$email."', address='".$address."', tel='".$tel."' WHERE id = ".$id;
        pdo_execute($sql);
    }

    function sendMail($email) {
        $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function checkemailPass($email,$user,$pass) {
        include "PHPMailer/src/PHPMailer.php";
        include "PHPMailer/src/Exception.php";
        include "PHPMailer/src/SMTP.php";
    

        $mail = new PHPMailer\PHPMailer\PHPMailer(true); 
        $mail->CharSet = 'UTF-8';
        // print_r($mail);

        try {

            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                                 
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'tranhanh2k4@gmail.com';                 // SMTP username
            $mail->Password = 'wydpxhjaafutpjnh';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
         
            //Recipients
            $mail->setFrom('tranhanh2k4@gmail.com', 'FPTSHOP');

            $mail->addAddress($email,$user);
         
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'ĐẶT LẠI MẬT KHẨU';
            $mail->Body    = 'Mật khẩu của bạn là:' .$pass;
         
            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

    

?>