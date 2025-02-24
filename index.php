<?php
// Definir una página predeterminada si no se pasa ningún parámetro
$page = isset($_GET['page']) ? $_GET['page'] : 'Vista/Inicio.html';  // Asegúrate de poner la ruta completa de la página
?>

<?php include('header.php'); ?>
<div class="contenedor">
    <?php
    if (file_exists($page)) {
        include($page);
    } else {
        echo "<p>Página no encontrada.</p>";
    }
    ?>
</div>
<?php include('footer.php'); ?>
