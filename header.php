<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Sinh viên</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #3498db;
            --text-light: #ecf0f1;
        }

        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f4f7f6; }

        /* Navigation Bar */
        .navbar { background-color: var(--primary-color); padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; color: var(--text-light); box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .nav-logo { font-size: 1.5rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; }
        .nav-links a { color: var(--text-light); text-decoration: none; margin-left: 20px; transition: 0.3s; }
        .nav-links a:hover { color: var(--accent-color); }

        /* Container cho nội dung */
        .container { max-width: 1000px; margin: 30px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 20px rgba(0,0,0,0.05); }

        /* Định dạng bảng dựa trên các trường thông tin bạn yêu cầu */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: var(--secondary-color); color: white; padding: 12px; text-align: left; text-transform: uppercase; font-size: 13px; }
        td { padding: 12px; border-bottom: 1px solid #eee; color: #333; }
        tr:hover { background-color: #f9f9f9; }

        /* Alert notifications */
        .alert { padding: 15px; border-radius: 4px; margin-bottom: 20px; border-left: 5px solid #27ae60; background-color: #d4edda; color: #155724; }
        
        /* Form styling */
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: var(--secondary-color); }
        .form-control { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        
        .btn-submit { background-color: var(--accent-color); color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn-submit:hover { background-color: #2980b9; }
    </style>
</head>
<body>

<header class="navbar">
    <div class="nav-logo">Student Manager</div>
    <nav class="nav-links">
        <a href="list_students.php">Danh sách SV</a>
        <a href="add_student.php">Thêm sinh viên</a>
        <a href="form_get.php">Tìm kiếm</a>
        <a href="form_post.php">Đăng ký SV</a>
        <a href="edit_student.php">Sửa thông tin</a>
        <a href="dashboard.php">quản trị</a>
        <a href="cart.php">giỏ hàng</a>
        <a href="login.php">đăng nhập</a>
        <a href="logout.php">đăng xuất</a>
    </nav>
</header>

