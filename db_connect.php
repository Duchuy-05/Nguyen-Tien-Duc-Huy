<?php
$host = '127.0.0.1'; // Dùng IP để ổn định hơn localhost
$port = '3307';      // Port XAMPP của bạn
$db   = 'buoi2_php';
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

// Bắt buộc phải có port=$port trong chuỗi DSN
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die('Hệ thống đang bảo trì, vui lòng quay lại sau');
}
?>