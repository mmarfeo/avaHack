<?php
include 'database.php';

echo "Parámetros recibidos:\n";
print_r($_POST); // Muestra todos los parámetros enviados

// O si prefieres más detalle:
var_dump($_POST); // Esto te dará más información sobre los tipos de datos


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'] ?? '';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($user_id)) {
        // Modificar usuario existente
        $stmt = $conn->prepare('UPDATE users SET email = ?, password = ? WHERE id = ?');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param('ssi', $email, $hashed_password, $user_id);
        $stmt->execute();
        echo 'Usuario modificado exitosamente';
    } else {
        // Agregar nuevo usuario
        $stmt = $conn->prepare('INSERT INTO users (name,surname,email, password) VALUES (?, ?, ?, ?)');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param('ssss',$name, $surname, $email, $hashed_password);
        $stmt->execute();
        echo 'Usuario agregado exitosamente';
    }
    $stmt->close();

    // Redirigir al dashboard
    header('Location: ../login.php');
}

$conn->close();
?>
