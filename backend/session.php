<?php

session_start();


// Leer los datos enviados por la solicitud AJAX
$data = json_decode(file_get_contents("php://input"), true);

// Verificar si los datos llegaron
if ($data && isset($data['signerAddress'])) {
    // Imprimir la dirección recibida
    echo "Solicitud recibida. Dirección: " . $data['signerAddress'];
    die(); // Detener la ejecución del script aquí para verificar que llega la solicitud
} else {
    echo "No se recibió ninguna dirección";
    die(); // Detener aquí también en caso de que no lleguen los datos
}
?>

?>
