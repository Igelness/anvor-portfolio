﻿<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['username'];
$email = $_POST['usermail'];
$phone = $_POST['userphone'];
$msg = $_POST['usermessage'];

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																						
$mail->SMTPAuth = true;                               
$mail->Username = 'ponteleev.ivan@bk.ru'; 
$mail->Password = 'XOFKgNcUf'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 
$mail->setFrom('ponteleev.ivan@bk.ru'); 
$mail->addAddress('a.a.vorobyev0@gmail.com');     

$mail->isHTML(true);                                  

$mail->Subject = 'Сообщение с сайта-портфолио';
$mail->Body    = '' .$name . ' отправил сообщение с сайта-портфолио, телефон: '    .$phone. '<br>Почта этого пользователя: ' .$email. '<br>Сообщение: ' .$msg ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: message.html');
}
