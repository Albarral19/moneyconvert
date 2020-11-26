<?php
require 'mailer/PHPMailer.php';

if (isset($_POST['name']) && !empty($_POST['name'])){
    $nome = $_POST['name'];
}

if (isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
}

if (isset($_POST['message']) && !empty($_POST['message'])){
    $message = $_POST['message'];
}

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'usuariomoneyconvert@gmail.com';
$mail->Password = 'moneyconvert123#';
$mail->Port = 587;

//https://temp-mail.org/pt/
//variavel onde é inserido o email do destinatário
$from = "kefacec762@58as.com";

$mail->setFrom($from, 'Contato');
$mail->addAddress('usuariomoneyconvert@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'ContatoUsuário - MoneyConvert';
$mail->Body    = 'Email: '. $email . '\nMensagem: ' . $mensagem;

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}

?>