<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Teste Php Mailer</title>
</head>
<body>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require "lib/vendor/autoload.php";

    $phpmailer = new PHPMailer();

    try {
        
        $phpmailer->isSMTP();
        $phpmailer->CharSet='UTF-8';
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '5ca0961ce3266f';
        $phpmailer->Password = 'f79c5ecd633568';

    $phpmailer->setFrom('anderson.santos.silva@live.com', 'Teste phpph$phpmailerer');
    $phpmailer->addAddress('anderson.santos.silva@live.com', 'Teste phpph$phpmailerer');     //Add a recipient

    $phpmailer->isHTML(true);                                  //Set eph$phpmailer format to HTML
    $phpmailer->Subject = 'Título da Menssagem';
    $phpmailer->Body    = 'Testando PhpMailer <b>Olá Mundo!</b>';
    $phpmailer->AltBody = 'Testando PhpMailer Olá Mundo!';

    $phpmailer->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
    
</body>
</html>