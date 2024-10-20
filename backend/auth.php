<?php
session_start(); // Inicia la sesión

include 'database.php';

// Verificar si la solicitud es POST y ver los datos enviados
echo "Parámetros recibidos:\n";
var_dump($_POST); // Muestra los parámetros recibidos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar que el usuario exista
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        var_dump($user);
        
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            // Establecer variable de sesión para el nombre de usuario
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['company'] = $user['company'];
            $_SESSION['sucursal'] = $user['sucursal'];
            // Leer los datos enviados por la solicitud AJAX
            $data = json_decode(file_get_contents("php://input"), true);
            $_SESSION['signerAddress'] = $data['signerAddress'];



            // Redirigir al dashboard
            header('Location: ../dashboard.php');
            exit();
        } else {
            echo 'Contraseña incorrecta';
        }
    } else {
        echo 'Usuario no encontrado';
    }
}
?>
