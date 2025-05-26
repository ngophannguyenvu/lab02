<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đơn hàng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .confirmation-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .confirmation-icon {
            font-size: 60px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header (giả lập từ header.php) -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Cửa hàng của bạn</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/lab02/Product">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Giỏ hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Nội dung chính -->
    <div class="confirmation-container">
        <i class="fas fa-check-circle confirmation-icon"></i>
        <h1>Xác nhận đơn hàng</h1>
        <p class="lead">Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đã được xử lý thành công.</p>
        <a href="/lab02/Product" class="btn btn-primary mt-2">Tiếp tục mua sắm</a>
    </div>

    <!-- Footer (giả lập từ footer.php) -->
    <footer>
        <p>&copy; 2025 Cửa hàng của bạn. All rights reserved.</p>
        <p>Liên hệ: support@yourstore.com | Hotline: 0123 456 789</p>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>