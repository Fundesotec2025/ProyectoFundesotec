<?php
$hostname = "localhost";
$user = "root";
$password = "fundesotec2025";
$bdname = "FUNDESOTEC";
// Conexión
$conn = new mysqli($hostname,$user,$password,$bdname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar: " . $conn->connect_error);
}
else {
   // echo "Conexión exitosa" // hOLAAAAAAAAAAAAAAAAAAAA ;; 
    
}
?>

