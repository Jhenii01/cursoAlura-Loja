<?php

session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailer.php");
require_once 'OAuth.php';
require_once 'POP3.php';
require_once 'SMTP.php';
require_once 'Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "jhenifer.msantos@gmail.com";
$mail->Password = "";

#quem está mandando email
$mail->setFrom("jhenifer.msantos@gmail.com", "Alura Curso PHP e MySQL");

#quem esta recebendo o email
$mail->addAddress("jhenifer.msantos@gmail.com");

#assunto da mensagem
$mail->Subject = "Email de contato da loja";

#mensagem como HTML
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");

#mensagem como TXT
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

$mail->SMTPOptions = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true]];

if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();
