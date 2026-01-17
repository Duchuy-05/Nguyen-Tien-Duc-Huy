<?php
require_once 'db_connect.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $student_code = $_POST['student_code'];
    $email = $_POST['email'];

    try {
        $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fullname, $student_code, $email]);
        $message = "Thêm sinh viên thành công!";
    } catch (PDOException $e) {
        $message = "Lỗi: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Bài 3: Thêm SV</title></head>
<body>
    <h2>Thêm sinh viên mới</h2>
    <?php if ($message) echo "<p style='color:blue;'>$message</p>"; ?>
    <form method="POST">
        Họ tên: <input type="text" name="fullname" required><br><br>
        Mã SV: <input type="text" name="student_code" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Thêm mới</button>
    </form>
    
</body>
</html>