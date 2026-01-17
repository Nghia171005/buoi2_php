<?php
require_once 'db_connect.php';
include 'header.php';

// 1. Lấy thông tin sinh viên hiện tại
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$student) {
        die("Không tìm thấy sinh viên!");
    }
}

// 2. Xử lý khi người dùng nhấn nút "Cập nhật"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $student_code = $_POST['student_code'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE students SET fullname = ?, student_code = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([$fullname, $student_code, $email, $id]);
        echo "<div class='alert'>Cập nhật thông tin thành công! <a href='list_students.php'>Quay lại danh sách</a></div>";
        // Cập nhật lại biến $student để hiển thị dữ liệu mới lên form
        $student['fullname'] = $fullname;
        $student['student_code'] = $student_code;
        $student['email'] = $email;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>

<h2>Chỉnh sửa thông tin sinh viên</h2>
<form method="POST" style="max-width: 400px;">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">

    <p>Họ tên:<br>
    <input type="text" name="fullname" value="<?= htmlspecialchars($student['fullname']) ?>" style="width:100%" required></p>
    
    <p>Mã SV:<br>
    <input type="text" name="student_code" value="<?= htmlspecialchars($student['student_code']) ?>" style="width:100%" required></p>
    
    <p>Email:<br>
    <input type="email" name="email" value="<?= htmlspecialchars($student['email']) ?>" style="width:100%" required></p>
    
    <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; cursor:pointer">Cập nhật</button>
    <a href="list_students.php" style="margin-left: 10px;">Hủy bỏ</a>
</form>

</body>
</html>