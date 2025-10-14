<?php
include('../config/config.php');

$username = $_POST['username'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
try {
    $stmt->execute([$username, $password]);
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Username already exists']);
}
?>
