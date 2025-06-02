<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS cho giao diện điện thoại -->
<style>
.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 60px 0;
    margin-bottom: 40px;
}

.product-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    overflow: hidden;
    height: 100%;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.product-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
}

.price-tag {
    font-size: 1.5rem;
    font-weight: bold;
    color: #e74c3c;
}

.category-badge {
    background: linear-gradient(45deg, #3498db, #2980b9);
    border: none;
    border-radius: 20px;
    padding: 5px 15px;
    font-size: 0.8rem;
}

.btn-cart {
    background: linear-gradient(45deg, #27ae60, #2ecc71);
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    transition: all 0.3s ease;
}

.btn-cart:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(46, 204, 113, 0.4);
}

.search-section {
    background: #f8f9fa;
    padding: 30px 0;
    margin-bottom: 40px;
}

.product-title {
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 10px;
}

.product-description {
    color: #7f8c8d;
    font-size: 0.9rem;
    line-height: 1.5;
}

.action-buttons {
    gap: 8px;
}

.stats-section {
    background: #34495e;
    color: white;
    padding: 20px 0;
    margin-top: 50px;
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">📱 Cửa Hàng Điện Thoại</h1>
                <p class="lead mb-4">Khám phá những chiếc điện thoại thông minh mới nhất với công nghệ tiên tiến nhất</p>
                <a href="/lab02/Product/add" class="btn btn-light btn-lg px-4 py-2">
                    <i class="fas fa-plus me-2"></i>Thêm sản phẩm mới
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-mobile-alt" style="font-size: 8rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</div>

<!-- Search Section -->
<div class="search-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Tìm kiếm điện thoại..." id="searchInput">
                    <button class="btn btn-primary px-4" type="button">
                        <i class="fas fa-filter me-2"></i>Lọc
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products Section -->
<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="text-center mb-4">
                <i class="fas fa-mobile-alt text-primary me-2"></i>
                Sản Phẩm Nổi Bật
            </h2>
        </div>
    </div>

    <div class="row g-4">
        <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card product-card h-100">
                <!-- Product Image -->
                <div class="position-relative">
                    <?php if ($product->image): ?>
                        <img src="/lab02/<?php echo $product->image; ?>" 
                             alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" 
                             class="product-image">
                    <?php else: ?>
                        <div class="product-image bg-light d-flex align-items-center justify-content-center">
                            <i class="fas fa-mobile-alt text-muted" style="font-size: 3rem;"></i>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Category Badge -->
                    <span class="badge category-badge position-absolute top-0 start-0 m-3">
                        <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                </div>

                <div class="card-body d-flex flex-column">
                    <!-- Product Title -->
                    <h5 class="product-title">
                        <a href="/lab02/Product/show/<?php echo $product->id; ?>" 
                           class="text-decoration-none text-dark">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </h5>

                    <!-- Product Description -->
                    <p class="product-description flex-grow-1">
                        <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                    <!-- Price -->
                    <div class="price-tag mb-3">
                        <?php echo number_format($product->price, 0, ',', '.'); ?> ₫
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4">
<div class="d-flex gap-2 flex-wrap">
<?php if (SessionHelper::isAdmin()): ?>
<a href="/webbanhang/Product/edit/<?php echo $product->id; ?>"
class="btn btn-warning btn-sm w-100 fw-bold text-white rounded-pill
transition-all hover-btn">
<i class="fas fa-edit me-1"></i> Sửa
</a>
<a href="/webbanhang/Product/delete/<?php echo $product->id; ?>"
class="btn btn-danger btn-sm w-100 fw-bold rounded-pill transition-all
hover-btn delete-btn">
<i class="fas fa-trash me-1"></i> Xóa
</a>
<?php endif; ?>
<a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>"
class="btn btn-primary btn-sm w-100 fw-bold rounded-pill transition-all
hover-btn">
<i class="fas fa-cart-plus me-1"></i> Thêm vào giỏ
</a>
</div>
</div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Stats Section -->
<div class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-3">
                <h3 class="fw-bold"><?php echo count($products); ?></h3>
                <p class="mb-0">Sản phẩm</p>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <h3 class="fw-bold">24/7</h3>
                <p class="mb-0">Hỗ trợ</p>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <h3 class="fw-bold">100%</h3>
                <p class="mb-0">Chính hãng</p>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <h3 class="fw-bold">1000+</h3>
                <p class="mb-0">Khách hàng</p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Search -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(function(card) {
        const productName = card.querySelector('.product-title').textContent.toLowerCase();
        const productDesc = card.querySelector('.product-description').textContent.toLowerCase();
        
        if (productName.includes(searchTerm) || productDesc.includes(searchTerm)) {
            card.closest('.col-lg-4').style.display = 'block';
        } else {
            card.closest('.col-lg-4').style.display = 'none';
        }
    });
});
</script>

<?php include 'app/views/shares/footer.php'; ?>