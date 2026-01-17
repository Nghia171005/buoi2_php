<?php
include 'header.php';
?>
<?php
require_once 'db_connect.php';

// 1. Truy vấn dữ liệu
$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1" cellpadding="10" style="border-collapse: collapse; width: 80%;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>ID</th>
            <th>Mã SV</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $sv): ?>
            <tr>
                <td><?= $sv['id'] ?></td>
                <td><?= htmlspecialchars($sv['student_code']) ?></td>
                <td><?= htmlspecialchars($sv['fullname']) ?></td>
                <td><?= htmlspecialchars($sv['email']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $sv['id'] ?>">Sửa</a> | 
                    <a href="delete.php?id=<?= $sv['id'] ?>" onclick="return confirm('Chắc chắn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>