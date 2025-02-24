<?php
class DonacionesModelo {
    private $conn;

    public function __construct() {
        include '../configuracion/Conexion.php'; // Incluir la conexión a la base de datos
        $this->conn = $conn;
    }

    // Método para guardar una donación en la base de datos
    public function guardarDonacion($nombre, $apellido, $monto, $correoElectronico, $metodoPago) {
        $query = "INSERT INTO DONACIONES (NOMBRE_DONANTE, APELLIDO_DONANTE, MONTO_DONACION, CORREO_DONANTE, MEDIO_PAGO) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssdss", $nombre, $apellido, $monto, $correoElectronico, $metodoPago);

        // Ejecutar la consulta y devolver el resultado
        return $stmt->execute();
    }
}
?>
