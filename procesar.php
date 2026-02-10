<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recibir y limpiar datos (Seguridad básica)
    $nombre   = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $email    = mysqli_real_escape_string($conexion, $_POST['email']);
    $mensaje  = mysqli_real_escape_string($conexion, $_POST['mensaje']);
    $query_type = isset($_POST['query']) ? $_POST['query'] : 'No especificado';

    // 2. Validación del lado del servidor (Requisito 3 del desafío)
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        header("Location: index.php?error=campos_vacios");
        exit();
    }

    // 3. Insertar en la base de datos
    $sql = "INSERT INTO mensajes (nombre, email, asunto, mensaje) 
            VALUES ('$nombre $apellido', '$email', '$query_type', '$mensaje')";

    if (mysqli_query($conexion, $sql)) {
        // Redirigir con éxito
        header("Location: index.php?enviado=1");
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>