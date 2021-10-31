<?php

/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');

require 'PHPMailer/PHPMailerAutoload.php';

$email_to = $_POST['email'];
// $data = $_POST;
// $mailSub = "ยืนยันการสมัครสมาชิก";
// if ($data['status'] == 'Approved') {
//     $mailMsg = '
//     เรียนคุณ ' . $data['name'] . ' <br>
    
//     คุณได้รับการอนุมัติ ให้สามารถเข้าใช้งานระบบได้ <br>คุณสามารถเข้าสู่ระบบโดย <a href="https://demo.aot.clicknext.net/login.php">คลิก</a>
//      หรือ https://demo.aot.clicknext.net/login.php <br><br>
//      ขอแสดงความนับถือ <br>
//     AOT Virtaul Thailland';
// } else {
//     $mailMsg = '
// เรียนคุณ ' . $data['name'] . ' <br>

// คุณ ไม่ได้รับการอนุมัติ ให้สามารถเข้าใช้งานระบบได้ <br>กรุณาติดต่อผู้ดูแลระบบ 065-520-3884 <br><br>
// ขอแสดงความนับถือ <br>
// AOT Virtaul Thailland';
// }

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->CharSet = "utf-8";
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
$mail->Mailer = "smtp";
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
//$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "resortfamily99@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "resort1029";
//Set who the message is to be sent from
$mail->setFrom('resort@service.com', 'resort');
//Set who the message is to be sent to

//Set the subject line
$mail->Subject = 'ยืนยันการจอง';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML('จองสำเร็จกรุณาไปจ่ายเงิน ตามเวลาที่กำหนด');
$mail->addAddress($email_to, 'คุณลูกค้า');

//send the message, check for errors
if (!$mail->send()) {
    $response['data'] = "Mailer Error: " . $mail->ErrorInfo;
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
} else {
    $response['data'] = 'Message sent!';
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
}
