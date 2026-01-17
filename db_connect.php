<?php
$host = 'localhost';
$db   = 'buoi2_php';
$user = 'root';
$pass = ''; // Thay đổi mật khẩu đúng của bạn

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Thiết lập chế độ báo lỗi
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Hiển thị thông báo thân thiện
    die("Hệ thống đang bảo trì, vui lòng quay lại sau");
    // Để xem lỗi thực tế khi code: echo $e->getMessage();
}
?>
