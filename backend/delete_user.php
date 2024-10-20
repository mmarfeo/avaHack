<?php
include 'database.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $stmt = $conn->prepare('DELETE FROM users WHERE id = ?');
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    echo 'Usuario eliminado con éxito';
}
?>
