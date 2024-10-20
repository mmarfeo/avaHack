<?php
include 'database.php';

// Comprobar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Verificar si el correo existe en la base de datos
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generar un token para el restablecimiento de la contraseña
        $token = bin2hex(random_bytes(50));
        $reset_link = "http://yourdomain.com/reset_password.php?token=" . $token;

        // Guardar el token en la base de datos
        $stmt = $conn->prepare('UPDATE users SET reset_token = ?, token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?');
        $stmt->bind_param('ss', $token, $email);
        $stmt->execute();

        // Enviar el correo
        $to = $email;
        $subject = 'Recuperación de contraseña';
        $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: " . $reset_link;
        $headers = 'From: no-reply@yourdomain.com' . "\r\n" .
                   'Reply-To: no-reply@yourdomain.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        echo 'Un enlace para restablecer tu contraseña ha sido enviado a tu correo.';
    } else {
        echo 'Este correo no está registrado en el sistema.';
    }
}
?>
