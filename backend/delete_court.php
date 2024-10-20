<?php
include 'database.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $stmt = $conn->prepare('DELETE FROM courts WHERE id = ?');
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    echo 'Cancha eliminada con éxito';
}

// Redirigir al usuario a la página de inicio de sesión
header('Location: ../frontend/manage_courts.php');
exit();
?>
