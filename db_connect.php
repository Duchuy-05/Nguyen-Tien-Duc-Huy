<?php
$host = '127.0.0.1';
$port = '3307';
$db   = 'buoi2_php';
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die('Hệ thống đang bảo trì, vui lòng quay lại sau');
}
?>
