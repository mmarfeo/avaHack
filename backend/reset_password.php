<?php
include 'database.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar si el token es válido y no ha expirado
    $stmt = $conn->prepare('SELECT * FROM users WHERE reset_token = ? AND token_expiry > NOW()');
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

            // Actualizar la contraseña
            $stmt = $conn->prepare('UPDATE users SET password = ?, reset_token = NULL, token_expiry = NULL WHERE id = ?');
            $stmt->bind_param('si', $new_password, $user['id']);
            $stmt->execute();

            echo 'Tu contraseña ha sido actualizada.';
        }
    } else {
        echo 'El enlace ha expirado o es inválido.';
    }
}
?>
