<?php
include 'header.php';
?>
<?php
session_start();
require 'db_connect.php'; // Chứa kết nối PDO $pdo

// 1. Nếu đã đăng nhập rồi thì cho thẳng vào Dashboard
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";

// 2. Xử lý khi người dùng nhấn nút Đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Tìm user theo email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kiểm tra user tồn tại và mật khẩu khớp (dùng password_verify cho mật khẩu đã hash)
    if ($user && password_verify($password, $user['password'])) {
        // Đăng nhập thành công
        $_SESSION['user'] = $user['email'];
        header("Location: dashboard.php");
        exit();
    } else {
        // Thất bại
        $error = "Sai email hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập hệ thống</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </div>
        <br>
        <div>
            <label>Mật khẩu:</label><br>
            <input type="password" name="password" required>
        </div>
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
    
    <p>Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
</body>
</html>