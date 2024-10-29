<?php
session_start(); // Inicia la sesión
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Revisar Carrito</title>
</head>

<body>
    <h2>Contenido del Carrito de Compra</h2>
    <?php
    if (empty($_SESSION['carrito'])) {
        echo "<p>Tu carrito está vacío.</p>";
    } else {
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="index.php">Regresar</a>
</body>

</html>