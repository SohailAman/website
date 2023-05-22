<?php

include 'phpmailer/PHPMailerAutoload.php';

$name               = $_REQUEST['yourName'];
$subject            = $name." has sent a request"; 
$mail               = new PHPMailer; 
$mail->isMail();    // Set mailer to use SMTP 
$mail->Host         = 'mxmdigital.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth     = true;             // Enable SMTP authentication
$mail->Username     = 'mxmdigital@mxmdigital.com'; // SMTP username  
$mail->Password     = 'fy+23sQpvP41';      // SMTP password
$mail->SMTPSecure   = 'tls';                 // Enable TLS encryption, `ssl` also accepted
$mail->Port         = 465;                   // TCP port to connect to
$mail->From         = 'mxmdigital@mxmdigital.com';
$mail->FromName     = $name;
$mail->addAddress('info@mxmdigital.com');
//$mail->addAddress('mxmdigital@yopmail.com');
$mail->isHTML(true);
$mail->Subject      = $subject;  
$mail->Body         = "Contact details are following"."\n"."Name : ".$_REQUEST["yourName"]."\n"."Email : ".$_REQUEST["email"]."\n"."Phone : ".$_REQUEST["phoneNumber"]."\n"."Company : ".$_REQUEST["companyName"]."\n"."Subject : ".$_REQUEST["subject"]."\n"."Message : ".$_REQUEST["message"]; 
$send = $mail->send();
if($send){
    echo 1;
}else{
    echo 0;
}



