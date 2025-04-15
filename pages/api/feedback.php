<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../vendor/autoload.php';

try {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!$data) {
        throw new Exception('Invalid request data');
    }

    $required = ['fullname', 'email', 'phone_number', 'message'];
    foreach ($required as $field) {
        if (empty($data[$field])) {
            throw new Exception("Field {$field} is required");
        }
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email format');
    }

    if (!preg_match('/^[0-9]{10}$/', $data['phone_number'])) {
        throw new Exception('Invalid phone number format');
    }

    if (strlen($data['fullname']) < 2) {
        throw new Exception('Name is too short');
    }

    if (strlen($data['message']) < 10) {
        throw new Exception('Message is too short');
    }

    $pdo = require __DIR__ . '/../../common/databases/connection.php';
    
    $sql = "INSERT INTO feedback (fullname, email, phone_number, message) VALUES (:fullname, :email, :phone_number, :message)";
    $stmt = $pdo->prepare($sql);
    
    $result = $stmt->execute([
        ':fullname' => $data['fullname'],
        ':email' => $data['email'],
        ':phone_number' => $data['phone_number'],
        ':message' => $data['message']
    ]);

    if (!$result) {
        throw new Exception('Failed to save feedback');
    }

    echo json_encode([
        'success' => true,
        'message' => 'Cảm ơn bạn đã gửi góp ý!'
    ]);

} catch (Exception $e) {
    error_log($e->getMessage());
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 