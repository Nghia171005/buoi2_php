<?php
include 'header.php';
?>
<form method="POST" action="">
    Họ tên: <input type="text" name="name" required><br>
    Mã SV: <input type="text" name="student_code" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Thêm mới</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'db_connect.php';

    $name = $_POST['name'];
    $code = $_POST['student_code'];
    $email = $_POST['email'];

    // Sử dụng Prepared Statement với tham số :name, :code...
    $sql = "INSERT INTO students (fullname, student_code, email) VALUES (:name, :code, :email)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':name' => $name,
            ':code' => $code,
            ':email' => $email
        ]);
        echo "Thêm sinh viên thành công!";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>