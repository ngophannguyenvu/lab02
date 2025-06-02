<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            --light-bg: #f8fafc;
            --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.07);
            --shadow-medium: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--light-bg);
            line-height: 1.6;
            color: #2d3748;
        }

        /* Navbar Styling - Đảm bảo z-index cao nhất */
        .navbar-custom {
            background: var(--primary-gradient) !important;
            box-shadow: var(--shadow-medium);
            padding: 1rem 0;
            position: relative;
            z-index: 9999 !important; /* Z-index cao nhất */
        }

        /* Loại bỏ các hiệu ứng có thể gây chồng lấp */
        .navbar-custom::before {
            content: none; /* Loại bỏ pseudo-element có thể gây chồng lấp */
        }

        .navbar-brand {
            font-weight: 700 !important;
            font-size: 1.5rem !important;
            color: white !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            z-index: 9999 !important;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-toggler {
            border: none !important;
            padding: 8px 12px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            position: relative;
            z-index: 9999 !important;
        }

        .navbar-toggler:focus {
            box-shadow: none !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        /* Đảm bảo navbar-collapse hiển thị đúng */
        .navbar-collapse {
            z-index: 9999 !important;
        }

        .navbar-nav {
            position: relative;
            z-index: 9999 !important;
        }

        /* Đảm bảo nav-link hiển thị rõ ràng và có thể click */
        .nav-link {
            color: white !important; /* Màu trắng đậm để dễ nhìn */
            font-weight: 600 !important;
            padding: 8px 16px !important;
            margin: 0 4px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 9999 !important;
            background: rgba(255, 255, 255, 0.1); /* Background nhẹ để dễ nhìn */
        }

        /* Loại bỏ hiệu ứng có thể gây chồng lấp */
        .nav-link::before {
            content: none;
        }

        .nav-link:hover {
            color: white !important;
            background: rgba(255, 255, 255, 0.2) !important;
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.3) !important;
            color: white !important;
            font-weight: 700 !important;
        }

        /* Đặc biệt cho nút đăng xuất */
        .nav-link.logout-btn {
            background: rgba(255, 0, 0, 0.2) !important; /* Background đỏ nhạt */
            color: white !important;
            font-weight: 700 !important;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .nav-link.logout-btn:hover {
            background: rgba(255, 0, 0, 0.4) !important;
        }

        /* User info styling */
        .user-info {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 25px;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            font-weight: 500;
            z-index: 9999 !important;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .role-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Dropdown styling */
        .dropdown-menu {
            background: white;
            border: none;
            border-radius: 12px;
            box-shadow: var(--shadow-heavy);
            padding: 8px;
            margin-top: 8px;
            z-index: 10000 !important; /* Z-index cao hơn navbar */
        }

        .dropdown-item {
            border-radius: 8px;
            padding: 10px 16px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 10001 !important;
        }

        .dropdown-item:hover {
            background: var(--light-bg);
            transform: translateX(4px);
        }

        /* Container styling */
        .main-container {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-light);
            margin-top: 2rem;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            z-index: 1; /* Z-index thấp hơn navbar */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-custom {
                padding: 0.5rem 0;
            }
            
            .navbar-brand {
                font-size: 1.2rem !important;
            }
            
            .brand-icon {
                width: 35px;
                height: 35px;
            }
            
            .main-container {
                margin-top: 1rem;
                padding: 1rem;
                border-radius: 15px;
            }
            
            .user-info {
                flex-direction: column;
                gap: 4px;
                text-align: center;
            }
            
            /* Đảm bảo menu mobile hiển thị đúng */
            .navbar-collapse {
                background: var(--primary-gradient);
                border-radius: 0 0 15px 15px;
                padding: 10px;
                box-shadow: var(--shadow-medium);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="brand-icon">
                    <i class="fas fa-cube"></i>
                </div>
                Quản lý sản phẩm
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/lab02/Product/">
                            <i class="fas fa-list me-1"></i>
                            Danh sách sản phẩm
                        </a>
                    </li>
                    <?php if (SessionHelper::isAdmin()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/lab02/Category">
                            <i class="fas fa-tags me-1"></i>
                            Quản lí danh mục
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                
                <ul class="navbar-nav">
                    <?php if (SessionHelper::isLoggedIn()): ?>
                        <!-- Hiển thị thông tin người dùng -->
                        <li class="nav-item me-3">
                            <div class="user-info">
                                <div class="user-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <div><?php echo htmlspecialchars($_SESSION['username']); ?></div>
                                    <div class="role-badge"><?php echo SessionHelper::getRole(); ?></div>
                                </div>
                            </div>
                        </li>
                        
                        <!-- Nút đăng xuất riêng biệt và rõ ràng -->
                        <li class="nav-item">
                            <a class="nav-link logout-btn" href="/lab02/account/logout">
                                <i class="fas fa-sign-out-alt me-1"></i>
                                Đăng xuất
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/lab02/account/login">
                                <i class="fas fa-sign-in-alt me-1"></i>
                                Đăng nhập
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="main-container">
            <!-- Content sẽ được load ở đây -->