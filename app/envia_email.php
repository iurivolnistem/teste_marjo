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
$mail->FromName = $_POST["nomeCliente"] . "  " . $_POST["sobrenomeCliente"];
$mail->From = $_POST["emailCliente"];
$mail->addAddress($nomeUsuario);
$mail->Subject = "Nova importação";
$mail->Body = '<h4 style="text-transform: uppercase;">Contato para uma nova importação</h4> <p>{$_POST["produtoCliente"]}</p>';

if(!$mail->send()){
    echo $mail->ErrorInfo;
}
else{
    $url = "../pages/obrigado.php";
    header("Location: " . $url);
}