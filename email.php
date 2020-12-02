<?php

    $name     = isset($_POST['name'])     ? utf8_decode($_POST['name'])     : '';
    $email    = isset($_POST['email'])    ? utf8_decode($_POST['email'])    : '';
    $message = isset($_POST['message']) ? utf8_decode($_POST['message']) : '';

    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        try{            
            $to = "email@email.com"; //destinatario
            $messageSubject = "Contact - Money Convert";
            $body = "";

            $body .= "From: ".$name. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Message: ".$message. "\r\n";       

            //Request PHPMailer
            require 'mailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->isSMTP();
            
            //cfg mail server
            $mail->Host = "smtp.gmail.com";       
            $mail->Port = "587";
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = "true";
            $mail->Username = "testephpMC@gmail.com";
            $mail->Password = "phpatequeebom";

            //cfg message
            $mail->setFrom($mail->Username, $name); // Remetente
            $mail->addAddress($to); // Destinatário
            $mail->Subject = $messageSubject;
            $mail->Body = $body;
            $mail->send();
            
            ?>
                <div class="alert alert-success">
                    Dados enviados com sucesso!
                </div>
            <?php
            
        }catch (Exception $e){
            ?>
                <div class="alert alert-warning">
                    Falha ao enviar o e-mail: <?php $mail->ErrorInfo; ?>
                </div>
            <?php
        } 
    }
    else {
        ?>
            <div class="alert alert-warning">
                Os dados de contato precisam ser preenchidos!
            </div>
        <?php                
    }    
    include 'contact.php';
?>