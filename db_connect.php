<?php
$host = 'localhost';
$db   = 'buoi2_php';
$user = 'root';
$pass = ''; // Mật khẩu mặc định của XAMPP thường để trống
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    // Thiết lập chế độ lỗi để PDO ném ngoại lệ (Exception)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Hiển thị thông báo thân thiện
    die("Hệ thống đang bảo trì, vui lòng quay lại sau.");
    // Để debug, bạn có thể dùng: echo "Lỗi: " . $e->getMessage();
}
?>