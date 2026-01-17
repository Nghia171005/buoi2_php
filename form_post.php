<?php
include 'header.php';
?>

<form method="POST" action="">
    <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
    <input type="password" name="password" placeholder="Mật khẩu" required><br>
    <button type="submit" name="register">Đăng ký</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Làm sạch dữ liệu để tránh lỗi bảo mật XSS
    $name = htmlspecialchars($_POST['username']);
    
    if (!empty($name)) {
        echo "<h3>Đã nhận thông tin của: $name</h3>";
    } else {
        echo "<p style='color:red;'>Vui lòng nhập tên đăng nhập!</p>";
    }
}
?>
