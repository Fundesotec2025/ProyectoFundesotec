<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
    $monto = filter_input(INPUT_POST, 'monto', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $whatsapp = preg_replace('/\D/', '', $_POST['whatsapp']);
    $correoElectronico = filter_input(INPUT_POST, 'correoElectronico', FILTER_VALIDATE_EMAIL);

    if (!$correoElectronico || strlen($whatsapp) < 9) {
        exit("Datos inválidos.");
    }

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('MAIL_USERNAME');
        $mail->Password = getenv('MAIL_PASSWORD');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom(getenv('MAIL_USERNAME'), 'Fundesotec');
        $mail->addAddress('fundesotec@outlook.com');

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Nueva donación registrada - Información importante';
        $mail->Body = "
            <h1>Detalles de la donación recibida</h1>
            <ul>
                <li><strong>Nombre:</strong> $nombre $apellido</li>
                <li><strong>Monto:</strong> $monto USD</li>
                <li><strong>Correo:</strong> $correoElectronico</li>
                <li><strong>WhatsApp:</strong> $whatsapp</li>
            </ul>";

        $mail->send();
    } catch (Exception $e) {
        exit("Hubo un error al enviar el correo: {$mail->ErrorInfo}");
    }

    // Preparar mensaje de WhatsApp
    $telefonoConCodigo = '593' . substr($whatsapp, 1); // Ecuador
    $mensaje = "¡Gracias por tu donación! Aquí están los datos bancarios:\n\n";
    $mensaje .= "Fundación: FUNDESOTEC\nBanco: Banco Pichincha\nCuenta N°: 2100171171\nRUC: 1792859395001";

    $whatsappUrl = "https://api.whatsapp.com/send?phone=$telefonoConCodigo&text=" . urlencode($mensaje);

    header("Location: $whatsappUrl");
    exit;
}
?>
