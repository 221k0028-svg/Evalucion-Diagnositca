<?php

$host = "sql200.infinityfree.com"; // Sustituye XXX por el número que te den
$user = "if0_41118946";           // Tu usuario de la cuenta
$pass = " tuxmSfeOTwmvK";     // La contraseña que configuraste o te asignaron
$db   = "if0_41118946_XXX"; // ¡Ojo! Aquí el nombre de la DB suele llevar un prefijo

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Fallo la conexión: " . mysqli_connect_error());
}
?>