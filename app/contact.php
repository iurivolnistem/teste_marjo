<?php

require("./PhpMailer/PHPMailer.php");
require("./PhpMailer/SMTP.php");
require("configEmail.php");

$mail = new PHPMailer\PHPMailer();
$mail->isSMTP();

$mail->Port = "465";
$mail->Host = "smtp.gmail.com";
$mail->isHTML(true);
$mail->SMTPSecure = "ssl";
$mail->Mailer = "smtp";
$mail->CharSet = "UTF-8";

$mail->SMTPAuth = true;
$mail->Username = $nomeUsuario;
$mail->Password = $senhaUsuario;

$mail->From = $nomeUsuario;
$mail->FromName = $_POST["name"];
$mail->From = $_POST["email"];
$mail->addAddress($nomeUsuario);
$mail->Subject = $_POST['subject'];
$mail->Body = "{$_POST['message']}";

if(!$mail->send()){
    echo $mail->ErrorInfo;
}
else{
    $url = "../pages/obrigado.php";
    header("Location: " . $url);
}