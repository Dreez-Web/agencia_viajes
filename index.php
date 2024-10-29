<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo "<h2>Bienvenido, " . $_SESSION['usuario'] . "!</h2>";
    echo "<a href='cerrar.php'>Cerrar sesión</a>";
} else {
    echo "No has iniciado sesión.";
    echo "<a href='login.php'>Iniciar sesión</a>";
}

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}


if (isset($_POST['paquete'])) {
    $paquete = $_POST['paquete'];
    $_SESSION['carrito'][] = $paquete;
}


if (isset($_POST['vaciar'])) {
    $_SESSION['carrito'] = array();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Carrito de Paquetes Turísticos</title>

</head>

<body>

    <div class="container">
        <h2>Selecciona tu Paquete Turístico</h2>
        <form class="formulario" method="POST">
            <div class="paquete">
                <label for="paquete">Elige un paquete:</label>
                <select name="paquete" id="paquete">
                    <option value="Paquete Playa">Paquete Playa</option>
                    <option value="Paquete Montaña">Paquete Montaña</option>
                    <option value="Paquete Aventura">Paquete Aventura</option>
                    <option value="Paquete Ciudad">Paquete Ciudad</option>
                </select>
                <br>
                <label for="fecha">Selecciona una fecha</label>
                <input type="date" name="fecha" id="fecha" required>
            </div>
            <button type="submit" class="btn">Agregar al Carrito</button>
        </form>

        <div class="carrito">
            <h3>Carrito de Compra</h3>
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
        </div>


        <form method="POST">
            <button type="submit" name="vaciar" class="btn">Vaciar Carrito</button>
        </form>
    </div>
    <br>

</body>

</html>