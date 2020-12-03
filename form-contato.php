<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mensagem = $_POST['mensagem'];

    $arquivo = 
    "<style type='text/css'>
    body {
    margin:0px;
    font-family:Verdane;
    font-size:12px;
    color: #666666;
    }
    a{
    color: #666666;
    text-decoration: none;
    }
    a:hover {
    color: #FF0000;
    text-decoration: none;
    }
    </style>
        <html>
            <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
                <tr>
                <td>
    <tr>
                    <td width='500'>Nome:$nome</td>
                    </tr>
                    <tr>
                    <td width='320'>E-mail:<b>$email</b></td>
        </tr>
        <tr>
                    <td width='320'>Telefone:<b>$phone</b></td>
                    </tr>
        <tr>
                    <td width='320'Mensagens:$mensagem</td>
                    </tr>
                </td>
            </tr>
            </table>
        </html>
    ";

    $to = "larissakd@hotmail.com";
    $destino = $to;
    $subject = "PORTAL DOS CEGONHEIROS - Email do fale conosco";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';

    $enviaremail = mail($destino, $subject, $arquivo, $headers);
    
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo "<meta http-equiv='refresh' content='10;URL=index.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "Email não enviado";
    }

?>
