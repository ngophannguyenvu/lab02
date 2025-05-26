<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS -->
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    --warning-gradient: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    --danger-gradient: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    --info-gradient: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
    --card-shadow: 0 15px 35px rgba(0,0,0,0.1);
    --hover-shadow: 0 20px 45px rgba(0,0,0,0.15);
}

body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.hero-section {
    background: var(--primary-gradient);
    color: white;
    padding: 50px 0;
    margin-bottom: 40px;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
}

.hero-content {
    position: relative;
    z-index: 2;
}

.main-card {
    border: none;
    border-radius: 25px;
    box-shadow: var(--card-shadow);
    overflow: hidden;
    transition: all 0.4s ease;
    background: white;
    position: relative;
}

.main-card:hover {
    box-shadow: var(--hover-shadow);
    transform: translateY(-8px);
}

.card-header-custom {
    background: var(--primary-gradient);
    color: white;
    padding: 30px;
    border: none;
    position: relative;
    text-align: center;
}

.card-header-custom::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: rgba(255,255,255,0.5);
    border-radius: 2px;
}

.category-icon {
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2.5rem;
    backdrop-filter: blur(10px);
}

.category-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.category-meta {
    background: rgba(255,255,255,0.15);
    padding: 15px 25px;
    border-radius: 50px;
    display: inline-block;
    backdrop-filter: blur(10px);
}

.card-body-custom {
    padding: 40px;
}

.description-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 30px;
    border-left: 5px solid #667eea;
    position: relative;
}

.description-section::before {
    content: '"';
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 4rem;
    color: #667eea;
    opacity: 0.3;
    font-family: serif;
}

.description-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #2c3e50;
    margin: 0;
    position: relative;
    z-index: 2;
}

.stats-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stat-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    border-color: #667eea;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: var(--info-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    color: white;
    font-size: 1.5rem;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 5px;
}

.stat-label {
    color: #7f8c8d;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.action-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-custom {
    border: none;
    border-radius: 15px;
    padding: 15px 30px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn-custom:hover::before {
    left: 100%;
}

.btn-warning-custom {
    background: var(--warning-gradient);
    color: white;
}

.btn-warning-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(243, 156, 18, 0.4);
    color: white;
}

.btn-secondary-custom {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
    color: white;
}

.btn-secondary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(149, 165, 166, 0.4);
    color: white;
}

.btn-info-custom {
    background: var(--info-gradient);
    color: white;
}

.btn-info-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(52, 152, 219, 0.4);
    color: white;
}

.error-section {
    text-align: center;
    padding: 60px 40px;
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
    color: white;
    border-radius: 20px;
    margin: 40px 0;
}

.error-icon {
    width: 100px;
    height: 100px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 3rem;
}

.breadcrumb-custom {
    background: white;
    border-radius: 15px;
    padding: 15px 25px;
    margin-bottom: 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.breadcrumb-custom .breadcrumb {
    margin: 0;
    background: none;
    padding: 0;
}

.breadcrumb-custom .breadcrumb-item a {
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumb-custom .breadcrumb-item.active {
    color: #2c3e50;
    font-weight: 600;
}

.floating-action {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
}

.btn-floating {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--success-gradient);
    border: none;
    color: white;
    font-size: 24px;
    box-shadow: 0 4px 15px rgba(46, 204, 113, 0.4);
    transition: all 0.3s ease;
}

.btn-floating:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(46, 204, 113, 0.6);
}

@media (max-width: 768px) {
    .hero-section {
        padding: 30px 0;
    }
    
    .category-title {
        font-size: 2rem;
    }
    
    .main-card {
        margin: 15px;
        border-radius: 20px;
    }
    
    .card-body-custom {
        padding: 25px;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .stats-section {
        grid-template-columns: 1fr;
    }
}

.pulse-animation {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.fade-in {
    animation: fadeIn 0.8s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="display-4 fw-bold mb-3">
                <i class="fas fa-folder-open me-3"></i>Chi Tiết Danh Mục
            </h1>
            <p class="lead mb-0">Thông tin chi tiết về danh mục sản phẩm</p>
        </div>
    </div>
</div>

<div class="container mb-5">
    <!-- Breadcrumb -->
    <div class="breadcrumb-custom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/lab02">
                        <i class="fas fa-home me-1"></i>Trang chủ
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/lab02/Category">
                        <i class="fas fa-list me-1"></i>Danh mục
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
            </ol>
        </nav>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card main-card fade-in">
                <?php if ($category): ?>
                    <!-- Card Header -->
                    <div class="card-header-custom">
                        <div class="category-icon pulse-animation">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h2 class="category-title">
                            <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                        </h2>
                        <div class="category-meta">
                            <i class="fas fa-calendar-alt me-2"></i>
                            Danh mục sản phẩm
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body-custom">
                        <!-- Stats Section -->
                        <div class="stats-section">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div class="stat-number"></div>
                                <div class="stat-label">Sản phẩm</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="stat-number"></div>
                                <div class="stat-label">Lượt xem</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="stat-number"></div>
                                <div class="stat-label">Đánh giá</div>
                            </div>
                        </div>

                        <!-- Description Section -->
                        <div class="description-section">
                            <h5 class="fw-bold mb-3 d-flex align-items-center">
                                <i class="fas fa-info-circle me-2 text-primary"></i>
                                Mô tả danh mục
                            </h5>
                            <p class="description-text">
                                <?php echo nl2br(htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8')); ?>
                            </p>
                        </div>

                        <!-- Additional Info -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <i class="fas fa-hashtag text-primary fa-lg"></i>
                                    </div>
                                    <div>
                                        <strong>ID danh mục:</strong><br>
                                        <span class="text-muted">#<?php echo $category->id; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <i class="fas fa-clock text-success fa-lg"></i>
                                    </div>
                                    <div>
                                        <strong>Trạng thái:</strong><br>
                                        <span class="badge bg-success">Đang hoạt động</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <a href="/lab02/Category/edit/<?php echo $category->id; ?>" 
                               class="btn btn-warning-custom">
                                <i class="fas fa-edit"></i>
                                Chỉnh sửa
                            </a>
                            <a href="/lab02/Product?category=<?php echo $category->id; ?>" 
                               class="btn btn-info-custom">
                                <i class="fas fa-eye"></i>
                                Xem sản phẩm
                            </a>
                            <a href="/lab02/Category" 
                               class="btn btn-secondary-custom">
                                <i class="fas fa-arrow-left"></i>
                                Quay lại danh sách
                            </a>
                        </div>
                    </div>

                <?php else: ?>
                    <!-- Error Section -->
                    <div class="error-section">
                        <div class="error-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Không tìm thấy danh mục!</h3>
                        <p class="mb-4">Danh mục bạn đang tìm kiếm không tồn tại hoặc đã bị xóa.</p>
                        <a href="/lab02/Category" class="btn btn-secondary-custom">
                            <i class="fas fa-arrow-left me-2"></i>
                            Quay lại danh sách danh mục
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Related Categories Section -->
<?php if ($category): ?>
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mb-4">
                <i class="fas fa-layer-group me-2 text-primary"></i>
                Danh mục liên quan
            </h3>
            <div class="row">
                <!-- Placeholder for related categories -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                            <h6 class="card-title">Điện thoại thông minh</h6>
                            <p class="text-muted small">Các sản phẩm</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-headphones fa-3x text-success mb-3"></i>
                            <h6 class="card-title">Phụ kiện</h6>
                            <p class="text-muted small"> sản phẩm</p>
                            <a href="#" class="btn btn-outline-success btn-sm">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-tablet-alt fa-3x text-warning mb-3"></i>
                            <h6 class="card-title">Máy tính bảng</h6>
                            <p class="text-muted small"> sản phẩm</p>
                            <a href="#" class="btn btn-outline-warning btn-sm">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Floating Help Button -->
<div class="floating-action">
    <button class="btn btn-floating" data-bs-toggle="tooltip" data-bs-placement="left" title="Cần hỗ trợ?">
        <i class="fas fa-question"></i>
    </button>
</div>

<!-- JavaScript -->
<script>
// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add loading animation to buttons
    document.querySelectorAll('.btn-custom').forEach(button => {
        button.addEventListener('click', function(e) {
            if (!this.href || this.href.includes('#')) return;
            
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Đang tải...';
            this.disabled = true;
            
            setTimeout(() => {
                this.innerHTML = originalText;
                this.disabled = false;
            }, 1000);
        });
    });
});

// Add intersection observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.querySelectorAll('.stat-card, .description-section').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease';
    observer.observe(el);
});
</script>

<?php include 'app/views/shares/footer.php'; ?>