<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS -->
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    --warning-gradient: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    --danger-gradient: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    --info-gradient: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
    --card-shadow: 0 10px 30px rgba(0,0,0,0.1);
    --hover-shadow: 0 15px 40px rgba(0,0,0,0.15);
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

.header-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: var(--card-shadow);
    border: none;
    position: relative;
    overflow: hidden;
}

.header-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: var(--primary-gradient);
}

.stats-grid {
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
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: var(--info-gradient);
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

.search-section {
    background: white;
    border-radius: 20px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.search-input {
    border: 2px solid #e9ecef;
    border-radius: 15px;
    padding: 15px 20px;
    font-size: 16px;
    transition: all 0.3s ease;
    background: #fafbfc;
}

.search-input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
    background: white;
}

.category-card {
    background: white;
    border: none;
    border-radius: 20px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    overflow: hidden;
    position: relative;
}

.category-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 5px;
    background: var(--primary-gradient);
}

.category-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--hover-shadow);
}

.category-header {
    padding: 25px 30px 15px;
    position: relative;
}

.category-icon {
    width: 50px;
    height: 50px;
    background: var(--primary-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.category-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 10px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.category-title:hover {
    color: #667eea;
}

.category-description {
    color: #7f8c8d;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.category-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #6c757d;
    font-size: 0.9rem;
}

.category-actions {
    padding: 20px 30px;
    background: #f8f9fa;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    flex-wrap: wrap;
}

.btn-custom {
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    position: relative;
    overflow: hidden;
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

.btn-view {
    background: var(--info-gradient);
    color: white;
}

.btn-view:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
    color: white;
}

.btn-edit {
    background: var(--warning-gradient);
    color: white;
}

.btn-edit:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
    color: white;
}

.btn-delete {
    background: var(--danger-gradient);
    color: white;
}

.btn-delete:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
    color: white;
}

.btn-add {
    background: var(--success-gradient);
    color: white;
    border-radius: 15px;
    padding: 15px 25px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-add:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(46, 204, 113, 0.4);
    color: white;
}

.empty-state {
    text-align: center;
    padding: 80px 40px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    margin: 40px 0;
}

.empty-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 3rem;
    color: #6c757d;
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
    
    .header-card {
        padding: 20px;
    }
    
    .category-card {
        margin: 10px;
    }
    
    .category-header {
        padding: 20px;
    }
    
    .category-actions {
        padding: 15px 20px;
        flex-direction: column;
    }
    
    .btn-custom {
        width: 100%;
        justify-content: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
}

.fade-in {
    animation: fadeIn 0.8s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3">
                        <i class="fas fa-folder-open me-3"></i>Quản Lý Danh Mục
                    </h1>
                    <p class="lead mb-0">Tổ chức và quản lý các danh mục sản phẩm một cách hiệu quả</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-layer-group pulse" style="font-size: 4rem; opacity: 0.3;"></i>
                </div>
            </div>
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
                <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
            </ol>
        </nav>
    </div>

    <!-- Header Card -->
    <div class="header-card fade-in">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h2 class="h3 fw-bold text-dark mb-2">
                    <i class="fas fa-list me-2 text-primary"></i>
                    Danh Sách Danh Mục
                </h2>
                <p class="text-muted mb-0">Quản lý tất cả danh mục sản phẩm của cửa hàng</p>
            </div>
            <a href="/lab02/Category/add" class="btn-add">
                <i class="fas fa-plus"></i>
                Thêm danh mục mới
            </a>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-folder"></i>
            </div>
            <div class="stat-number"><?php echo count($categories ?? []); ?></div>
            <div class="stat-label">Tổng danh mục</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-box"></i>
            </div>
            <div class="stat-number">8</div>
            <div class="stat-label">Sản phẩm</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-eye"></i>
            </div>
            <div class="stat-number">1k</div>
            <div class="stat-label">Lượt xem</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-number">1.2%</div>
            <div class="stat-label">Tăng trưởng</div>
        </div>
    </div>

    <!-- Search Section -->
    <div class="search-section">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="position-relative">
                    <i class="fas fa-search position-absolute" style="left: 20px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
                    <input type="text" 
                           class="form-control search-input" 
                           placeholder="Tìm kiếm danh mục..." 
                           id="searchInput"
                           style="padding-left: 50px;">
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <select class="form-select search-input">
                    <option value="">Tất cả trạng thái</option>
                    <option value="active">Đang hoạt động</option>
                    <option value="inactive">Tạm dừng</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Categories List -->
    <?php if (empty($categories)): ?>
        <div class="empty-state fade-in">
            <div class="empty-icon">
                <i class="fas fa-folder-open"></i>
            </div>
            <h3 class="fw-bold text-muted mb-3">Chưa có danh mục nào</h3>
            <p class="text-muted mb-4">Hãy tạo danh mục đầu tiên để bắt đầu tổ chức sản phẩm của bạn</p>
            <a href="/lab02/Category/add" class="btn-add">
                <i class="fas fa-plus me-2"></i>
                Tạo danh mục đầu tiên
            </a>
        </div>
    <?php else: ?>
        <div class="row" id="categoriesContainer">
            <?php foreach ($categories as $index => $category): ?>
            <div class="col-lg-6 col-xl-4 category-item fade-in" style="animation-delay: <?php echo $index * 0.1; ?>s;">
                <div class="category-card">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <h5 class="category-title">
                            <a href="/lab02/Category/show/<?php echo $category->id; ?>" class="text-decoration-none">
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </h5>
                        <p class="category-description">
                            <?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        
                        <div class="category-meta">
                            <div class="meta-item">
                                <i class="fas fa-hashtag"></i>
                                <span>ID: <?php echo $category->id; ?></span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-box"></i>
                                <span>24 sản phẩm</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-check-circle text-success"></i>
                                <span>Hoạt động</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category-actions">
                        <a href="/lab02/Category/show/<?php echo $category->id; ?>" 
                           class="btn-custom btn-view">
                            <i class="fas fa-eye"></i>
                            Xem
                        </a>
                        <a href="/lab02/Category/edit/<?php echo $category->id; ?>" 
                           class="btn-custom btn-edit">
                            <i class="fas fa-edit"></i>
                            Sửa
                        </a>
                        <a href="/lab02/Category/delete/<?php echo $category->id; ?>" 
                           class="btn-custom btn-delete"
                           onclick="return confirmDelete('<?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>');">
                            <i class="fas fa-trash"></i>
                            Xóa
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Floating Add Button -->
<div class="floating-action">
    <a href="/lab02/Category/add" class="btn btn-floating" data-bs-toggle="tooltip" data-bs-placement="left" title="Thêm danh mục mới">
        <i class="fas fa-plus"></i>
    </a>
</div>

<!-- JavaScript -->
<script>
// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

// Search functionality
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const categoryItems = document.querySelectorAll('.category-item');
    
    categoryItems.forEach(function(item) {
        const categoryName = item.querySelector('.category-title').textContent.toLowerCase();
        const categoryDesc = item.querySelector('.category-description').textContent.toLowerCase();
        
        if (categoryName.includes(searchTerm) || categoryDesc.includes(searchTerm)) {
            item.style.display = 'block';
            item.style.animation = 'fadeIn 0.5s ease-in';
        } else {
            item.style.display = 'none';
        }
    });
    
    // Show/hide empty state
    const visibleItems = document.querySelectorAll('.category-item[style*="block"]').length;
    if (visibleItems === 0 && searchTerm !== '') {
        showNoResults();
    } else {
        hideNoResults();
    }
});

// Confirm delete function
function confirmDelete(categoryName) {
    return confirm(`Bạn có chắc chắn muốn xóa danh mục "${categoryName}"?\n\nHành động này không thể hoàn tác.`);
}

// Show no results message
function showNoResults() {
    const container = document.getElementById('categoriesContainer');
    if (!document.getElementById('noResults')) {
        const noResults = document.createElement('div');
        noResults.id = 'noResults';
        noResults.className = 'col-12';
        noResults.innerHTML = `
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="fw-bold text-muted mb-3">Không tìm thấy kết quả</h3>
                <p class="text-muted mb-0">Thử thay đổi từ khóa tìm kiếm</p>
            </div>
        `;
        container.appendChild(noResults);
    }
}

// Hide no results message
function hideNoResults() {
    const noResults = document.getElementById('noResults');
    if (noResults) {
        noResults.remove();
    }
}

// Add loading animation to buttons
document.querySelectorAll('.btn-custom').forEach(button => {
    button.addEventListener('click', function(e) {
        if (!this.href || this.href.includes('#')) return;
        
        const originalText = this.innerHTML;
        this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Đang tải...';
        this.style.pointerEvents = 'none';
        
        setTimeout(() => {
            this.innerHTML = originalText;
            this.style.pointerEvents = 'auto';
        }, 1000);
    });
});

// Intersection Observer for animations
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

// Observe category cards for animation
document.querySelectorAll('.category-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'all 0.6s ease';
    observer.observe(card);
});
</script>

<?php include 'app/views/shares/footer.php'; ?>