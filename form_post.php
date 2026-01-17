<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Bài 1: POST</title></head>
<body>
    <form method="POST" action="">
        Tên: <input type="text" name="username" required><br>
        Mật khẩu: <input type="password" name="password" required><br>
        <button type="submit">Đăng ký</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        echo "<h3>Đã nhận thông tin của $name</h3>";
    }
    ?>
</body>
</html>