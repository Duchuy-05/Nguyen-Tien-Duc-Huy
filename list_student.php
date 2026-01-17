<?php
require_once 'db_connect.php';
try {
    $stmt = $pdo->query("SELECT * FROM students");
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Lỗi: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"><title>Bài 4: Danh sách</title>
    <style>table { width: 80%; border-collapse: collapse; } th, td { border: 1px solid #000; padding: 8px; }</style>
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <a href="add_student.php">Thêm mới</a><br><br>
    <table>
        <tr>
            <th>ID</th><th>Họ tên</th><th>Mã SV</th><th>Email</th><th>Hành động</th>
        </tr>
        <?php foreach ($students as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['fullname']) ?></td>
            <td><?= htmlspecialchars($row['student_code']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><a href="#">Sửa</a> | <a href="#">Xóa</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>