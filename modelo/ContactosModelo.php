<?php
class ContactosModelo {
    private $conn;

    public function __construct() {
        require_once "../configuracion/Conexion.php"; // Conexión a la base de datos
        $this->conn = $conn;
    }

    public function insertarContacto($nombreCompleto, $correo, $asunto, $mensaje) {
        $query = "INSERT INTO CONTACTOS (NOMBRE_COMPLETO, CORREO, ASUNTO, MENSAJE) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        // Verificar si la consulta se preparó correctamente
        if ($stmt === false) {
            error_log("Error en la preparación de la consulta: " . $this->conn->error);
            return false;
        }

        $stmt->bind_param("ssss", $nombreCompleto, $correo, $asunto, $mensaje);
        return $stmt->execute();
    }
}
?>
