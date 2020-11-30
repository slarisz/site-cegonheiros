<?php

    $destinatario = "larissakd@hotmail.com";

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $mensagem = $_REQUEST['mensagem'];


    $body = "===================================" . "\n";
    $body = $body . "FALE CONOSCO - TESTE" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome Completo: " . $nome . "\n";
    $body = $body . "Email: " . $email . "\n";
    $body = $body . "Telefone: " . $email . "\n";
    $body = $body . "Mensagem: " . $mensagem . "\n\n";
    $body = $body . "===================================" . "\n";

    mail($destinatario, $assunto , $body, "From: $email\r\n");


    header('Content-Type: text/html; charset=utf-8; location: index.html/#contato');

?>
