<?php

    $nome     = isset($_POST['name'])     ? $_POST['name']     : '';
    $email    = isset($_POST['email'])    ? $_POST['email']    : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if ($nome && $email && $message) {
        ?>
            <div class="alert alert-success">
                Dados enviados com sucesso!
            </div>
        <?php
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