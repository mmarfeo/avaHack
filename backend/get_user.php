<?php
include 'database.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $stmt = $conn->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($user = $result->fetch_assoc()) {
        echo json_encode($user);
    } else {
        echo json_encode(null);
    }
}
?>
