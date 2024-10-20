<?php
// Configura tus credenciales de base de datos
$host = 'localhost'; // El nombre del host o IP del servidor de base de datos
$db = 'avahacktest'; // Nombre de la base de datos
$user = 'root'; // Nombre de usuario
$pass = ''; // Contraseña

// Crea una nueva conexión MySQLi
$conn = new mysqli($host, $user, $pass, $db);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    // Si hay un error, muestra un mensaje y termina el script
    echo 'Error de conexión: ' . $conn->connect_error;
    die();
} else {
    // Si la conexión es exitosa, muestra un mensaje
    echo 'Conexión exitosa a la base de datos.';
}

// Cierra la conexión al final
/* $conn->close(); */
?>