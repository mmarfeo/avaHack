<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $court_name = $_POST['court_name'];
    $court_location = $_POST['court_location'];
    $court_surface = $_POST['court_surface'];
    $court_id = $_POST['court_id'];

    if (!empty($court_id)) {
        // Actualizar cancha existente
        $stmt = $conn->prepare('UPDATE courts SET court_name = ?, court_location = ?, court_surface = ? WHERE id = ?');
        $stmt->bind_param('sssi', $court_name, $court_location, $court_surface, $court_id);
    } else {
        // Insertar nueva cancha
        $stmt = $conn->prepare('INSERT INTO courts (court_name, court_location, court_surface) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $court_name, $court_location, $court_surface);
    }
    
    $stmt->execute();
    header('Location: ../frontend/manage_courts.php');
    exit();
}
?>
