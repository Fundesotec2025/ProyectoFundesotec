<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once '../modelo/DonacionesModelo.php';

// Autoload PHPMailer (si estás usando Composer)
require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $monto = $_POST['monto'];
    $correoElectronico = $_POST['correoElectronico'];
    $metodoPago = $_POST['metodoPago'];

    // Crear una instancia del modelo y guardar los datos
    $donacionesModelo = new DonacionesModelo();
    $resultado = $donacionesModelo->guardarDonacion($nombre, $apellido, $monto, $correoElectronico, $metodoPago);

    // Si la donación fue guardada correctamente
    if ($resultado) {
        try {
            // Correo para el donante
            $mailDonante = new PHPMailer(true);
            $mailDonante->isSMTP();
            $mailDonante->Host = 'smtp.gmail.com'; // Cambiar al servidor SMTP de tu preferencia
            $mailDonante->SMTPAuth = true;
            $mailDonante->Username = 'fundesotec.osfl@fundesotec.org'; // Tu correo
            $mailDonante->Password = 'upcf rosa ytly vwlo'; // Tu contraseña
            $mailDonante->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailDonante->Port = 587;

            // --------------------------------------------------Correo al donante
            $mailDonante->setFrom('fundesotec.osfl@fundesotec.org', 'Fundesotec'); // Cambiar con tu correo
            $mailDonante->addAddress($correoElectronico); // Enviar el correo al donante

            // Contenido del correo para el donante
            $mailDonante->isHTML(true);
            $mailDonante->CharSet = 'UTF-8';
            $mailDonante->Subject = 'Datos para realizar tu donación a FUNDESOTEC';
            $mailDonante->Body = '
                <h3>Estimado/a ' . $nombre . ' ' . $apellido . ',</h3>
                <p>Te agradecemos profundamente por tu interés en apoyar a nuestra fundación. A continuación te proporcionamos los datos bancarios para realizar tu donación:</p>
            
                <h4>Datos para realizar tu donación:</h4>
                <ul>
                    <li><strong>Fundación:</strong> Fundación Desarrollo Social y Tecnológico (FUNDESOTEC)</li>
                    <li><strong>Banco:</strong> Banco Pichincha</li>
                    <li><strong>Tipo de Cuenta:</strong> Cuenta Corriente</li>
                    <li><strong>Cuenta N°:</strong> 2100171171</li>
                    <li><strong>RUC:</strong> 1792859395001</li>
                </ul>
            
                <p>Por favor, realiza tu aporte en la cuenta indicada. Una vez que hayas realizado la donación, te pedimos amablemente que nos envíes el comprobante de pago a este correo para procesarlo y confirmar tu contribución.</p>
            
                <p><strong>Correo para enviar comprobante:</strong> fundesotec@outlook.com</p>
            
                <h4>Método de pago alternativo:</h4>
                <p>Si prefieres hacer tu donación a través de PayPal, puedes hacerlo enviando tu aporte a la siguiente dirección:</p>
                <p><strong>Correo PayPal:</strong> fundesotec@outlook.com</p>
            
                <p>¡Gracias por tu solidaridad y por contribuir a nuestra causa! Si tienes alguna pregunta, no dudes en contactarnos.</p>
            
                <p>Atentamente, <br>El equipo de FUNDESOTEC</p>
            ';
            // Enviar el correo al donante
            $mailDonante->send();


            // -----------------------------------------------Correo para la fundación
            $mailFundacion = new PHPMailer(true);
            $mailFundacion->isSMTP();
            $mailFundacion->Host = 'smtp.gmail.com'; // Cambiar al servidor SMTP de tu preferencia
            $mailFundacion->SMTPAuth = true;
            $mailFundacion->Username = 'fundesotec.osfl@fundesotec.org'; // Tu correo
            $mailFundacion->Password = 'upcf rosa ytly vwlo'; // Tu contraseña
            $mailFundacion->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailFundacion->Port = 587;

            // Correo a la fundación
            $mailFundacion->setFrom('fundesotec.osfl@fundesotec.org', 'Fundesotec'); // Cambiar con tu correo
            $mailFundacion->addAddress('fundesotec@outlook.com', 'Fundesotec'); // Correo de la fundación

            // Contenido del correo para la fundación
            $mailFundacion->isHTML(true);
            $mailFundacion->CharSet = 'UTF-8'; // Añadir esta línea
            $mailFundacion->Subject = 'Nueva donación registrada - Aún no completada';
            $mailFundacion->Body = '
            <h1>¡Nueva donación registrada en FUNDESOTEC! - Acción pendiente</h1>
            <p>Estimado/a equipo de FUNDESOTEC,</p>
        
            <p>Les informamos que un donante ha iniciado el proceso de donación en nuestra plataforma. A continuación, los detalles proporcionados por el donante:</p>
        
            <h3>Detalles de la donación pendiente:</h3>
            <ul>
                <li><strong>Nombre del donante:</strong> ' . $nombre . ' ' . $apellido . '</li>
                <li><strong>Monto de la donación:</strong> ' . $monto . ' USD</li>
                <li><strong>Método de pago seleccionado:</strong> ' . $metodoPago . '</li>
            </ul>
        
            <p>Este donante ha seleccionado un monto para donar, pero aún debe completar la transacción. El donante recibirá un correo con los datos bancarios para que realice el pago correspondiente. Estén atentos, ya que el comprobante de pago será enviado a nuestra dirección de correo electrónico <strong>fundesotec@outlook.com</strong> para su verificación.</p>
        
            <h4>Próximos pasos:</h4>
            <ul>
                <li>Esperar el comprobante de pago que el donante enviará a nuestro correo.</li>
                <li>Verificar que el monto coincida con lo registrado en la donación.</li>
                <li>Confirmar la donación una vez que se haya verificado el pago.</li>
            </ul>
        
            <p>Una vez que hayan verificado el pago, por favor envíen un correo de confirmación al donante para notificarle que su donación ha sido registrada y agradecemos profundamente su aporte.</p>
        
            <p>Gracias por estar al tanto de este proceso y por su compromiso con nuestra causa. ¡Juntos estamos haciendo una diferencia!</p>
        
            <p>Saludos cordiales, <br>El equipo de FUNDESOTEC</p>
        ';
            // Enviar el correo a la fundación
            $mailFundacion->send();

            echo json_encode(['success' => true, 'message' => 'Correos enviados correctamente']);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error al enviar correo: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Hubo un error al procesar la donación']);
    }
}
