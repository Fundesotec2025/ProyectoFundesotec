<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../modelo/ContactosModelo.php";
require '../vendor/autoload.php'; // Incluir el autoload de Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreCompleto = trim($_POST["nombreCompleto"]);
    $correo = trim($_POST["correo"]);
    $asunto = trim($_POST["asunto"]);
    $mensaje = trim($_POST["mensaje"]);

    // Validación básica
    if (empty($nombreCompleto) || empty($correo) || empty($asunto) || empty($mensaje)) {
        echo json_encode(["success" => false, "error" => "Todos los campos son obligatorios."]);
        exit;
    }

    // Validación de correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "error" => "Correo electrónico no válido."]);
        exit;
    }

    // Insertar en la base de datos
    $contactoModelo = new ContactosModelo();
    $resultado = $contactoModelo->insertarContacto($nombreCompleto, $correo, $asunto, $mensaje);

    if ($resultado) {
        // Enviar correo electrónico
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'fundesotec.osfl@fundesotec.org'; // Tu correo
            $mail->Password = 'upcf rosa ytly vwlo'; // Tu contraseña
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configuración del correo
            $mail->setFrom('fundesotec.osfl@fundesotec.org', 'Fundesotec');
            $mail->addAddress('fundesotec@outlook.com', 'Equipo Fundesotec'); // Destinatario fijo
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Nuevo mensaje de contacto: ' . $asunto;
            $mail->Body = '
                <h1>Nuevo mensaje de contacto recibido</h1>
                <p>Estimado/a equipo de FUNDESOTEC,</p>
            
                <p>Se ha recibido un nuevo mensaje de contacto en nuestro sitio web. A continuación, los detalles:</p>
            
                <h3>Detalles del mensaje:</h3>
                <ul>
                    <li><strong>Nombre completo:</strong> ' . $nombreCompleto . '</li>
                    <li><strong>Correo electrónico:</strong> ' . $correo . '</li>
                    <li><strong>Asunto:</strong> ' . $asunto . '</li>
                </ul>
            
                <h3>Mensaje:</h3>
                <p>' . nl2br($mensaje) . '</p>
            
                <p>Por favor, no olviden responder al mensaje en cuanto tengan la oportunidad. Si necesitan más detalles, no duden en ponerse en contacto.</p>
            
                <p>¡Gracias por su atención!</p>
            
                <p>Saludos cordiales, <br>El equipo de FUNDESOTEC</p>
            ';

            // Enviar el correo
            $mail->send();
            echo json_encode(["success" => true]);
        } catch (Exception $e) {
            error_log("Error al enviar el correo: " . $mail->ErrorInfo);
            echo json_encode(["success" => false, "error" => "Error al enviar el correo."]);
        }
    } else {
        echo json_encode(["success" => false, "error" => "Error al guardar el mensaje en la base de datos."]);
    }
}
