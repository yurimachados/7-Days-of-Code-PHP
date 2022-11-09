<?php

use PHPMailer\PHPMailer\PHPMailer;

function send_email($recipient,$subject,$content)
{

    /* SMTP =  Simple Mail Transfer Protocol
    * https://pt.wikipedia.org/wiki/Simple_Mail_Transfer_Protocol
    */

    // Settings
    $mail = new PHPMailer();
    $mail->SMTPSecure = '**tls**';
    $mail->isSMTP(true);
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;

    $mail->Username = EMAIL_ADDRESS;
    $mail->Password = EMAIL_PASSWORD;
    $mail->From = EMAIL_ADDRESS;
    $mail->FromName = "ScubaPHP";
    $mail->addAddress($recipient);
    $mail->Subject = $subject;
    $mail->Body = $content;
    $mail->AltBody = $content;
    $enviado = $mail->Send();
}