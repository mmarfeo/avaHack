<?php
include 'database.php';

$stmt = $conn->prepare('SELECT * FROM users');
$stmt->execute();
$result = $stmt->get_result();

while ($user = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($user['id']) . '</td>';
    echo '<td>' . htmlspecialchars($user['username']) . '</td>';
    echo '<td>
        <a href="manage_users.html?id=' . htmlspecialchars($user['id']) . '">Editar</a>
        <a href="delete_user.php?id=' . htmlspecialchars($user['id']) . '" onclick="return confirm(\'¿Estás seguro de que quieres eliminar este usuario?\')">Eliminar</a>
    </td>';
    echo '</tr>';
}
?>
