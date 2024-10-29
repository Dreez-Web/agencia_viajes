<?php
session_start();

// Comprobar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    echo "<h2>Bienvenido, " . $_SESSION['usuario'] . "!</h2>";
    echo "<a href='cerrar.php'>Cerrar sesión</a>";
} else {
    echo "No has iniciado sesión.";
    echo "<a href='login.php'>Iniciar sesión</a>";
}
