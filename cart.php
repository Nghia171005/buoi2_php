<?php
include 'header.php';
?>
<?php
session_start();

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Giả lập thêm sản phẩm
if (isset($_GET['add'])) {
    $_SESSION['cart'][] = $_GET['add']; // Thêm ID sản phẩm vào mảng
}
?>

<h3>Giỏ hàng của bạn:</h3>
<ul>
    <?php foreach($_SESSION['cart'] as $id): ?>
        <li>Sản phẩm ID: <?php echo htmlspecialchars($id); ?></li>
    <?php endforeach; ?>
</ul>

<a href="?add=101">Thêm sản phẩm 101</a> | 
<a href="?add=202">Thêm sản phẩm 202</a>