<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Bài 1: GET</title></head>
<body>
    <form method="GET" action="">
        Tìm kiếm: <input type="text" name="keyword" placeholder="Nhập từ khóa...">
        <button type="submit">Tìm</button>
    </form>
    <?php
    if (isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword']);
        echo "<h3>Bạn đang tìm kiếm từ khóa: $keyword</h3>";
    }
    ?>
</body>
</html>