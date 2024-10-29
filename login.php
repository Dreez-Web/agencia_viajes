<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guardar el nombre en la sesión
    $_SESSION['usuario'] = $_POST['nombre'];
    // Redirigir a la página de bienvenida
    header("Location: index.php");
    exit();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sesiones en PHP</title>
</head>

<body>
    <h1>Agencia de viajes IACC</h1>
    <div class="inicio">
        <h2>Iniciar Sesión</h2>
        <form method="post" action="">
            Nombre: <input type="text" name="nombre" required> <br>
            Contraseña: <input type="password" name="contraseña" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>

</html>