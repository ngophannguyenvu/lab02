<?php include 'app/views/shares/header.php'; ?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4 p-3 rounded" style="background: linear-gradient(135deg, #007bff, #00d4ff);">
        <h1 class="h2 text-white fw-bold mb-0">Danh sách sản phẩm</h1>
        <a href="/2280603737_NgoPhanNguyenVu/Product/add" class="btn btn-success d-flex align-items-center gap-2">
            <i class="bi bi-plus-circle"></i> Thêm sản phẩm mới
        </a>
    </div>

    <?php if (empty($products)): ?>
        <div class="alert alert-info text-center rounded shadow-sm" role="alert">
            <i class="bi bi-info-circle me-2"></i> Chưa có sản phẩm nào trong danh sách.
        </div>
    <?php else: ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 product-card" style="border-left: 4px solid #007bff;">
                        <div class="card-img-container">
                            <?php if ($product->image): ?>
                                <img src="/2280603737_NgoPhanNguyenVu/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                                     class="card-img-top" 
                                     alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" 
                                     style="height: 250px; object-fit: cover; width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            <?php else: ?>
                                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 250px; width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <span class="text-muted">No Image</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title mb-2 fw-bold">
                                <a href="/2280603737_NgoPhanNguyenVu/Product/show/<?php echo $product->id; ?>" 
                                   class="text-decoration-none text-primary">
                                    <i class="bi bi-phone me-2 text-primary"></i>
                                    <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </h5>
                            <p class="card-text text-muted mb-2" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; height: 60px;">
                                <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                            <p class="card-text fw-bold text-danger mb-2">
                                💰 <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                            </p>
                            <p class="card-text mb-0">
                                <strong>Danh mục:</strong> 
                                <span class="badge bg-info text-white">
                                    <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-3 d-flex gap-2 justify-content-end">
                            <a href="/2280603737_NgoPhanNguyenVu/Product/show/<?php echo $product->id; ?>" 
                               class="btn btn-primary btn-sm d-flex align-items-center gap-1">
                                <i class="bi bi-eye"></i> Xem chi tiết
                            </a>
                            <a href="/2280603737_NgoPhanNguyenVu/Product/edit/<?php echo $product->id; ?>" 
                               class="btn btn-warning btn-sm d-flex align-items-center gap-1">
                                <i class="bi bi-pencil"></i> Sửa
                            </a>
                            <a href="/2280603737_NgoPhanNguyenVu/Product/delete/<?php echo $product->id; ?>" 
                               class="btn btn-danger btn-sm d-flex align-items-center gap-1" 
                               onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                <i class="bi bi-trash"></i> Xóa
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>

<!-- Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Custom CSS -->
<style>
body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.card {
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background-color: #f1f8ff;
}
.card-img-container {
    overflow: hidden;
}
.card-img-top {
    object-fit: cover;
    transition: transform 0.3s ease;
}
.card-img-top:hover {
    transform: scale(1.05);
}
.card-body {
    padding: 15px;
}
.card-footer {
    padding: 10px 15px;
}
.btn {
    border-radius: 8px;
    padding: 6px 12px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}
.btn-success {
    background: linear-gradient(135deg, #28a745, #34c759);
    border: none;
}
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
}
.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn:hover {
    filter: brightness(90%);
}
.text-primary {
    color: #007bff !important;
}
.alert {
    border-radius: 10px;
    padding: 20px;
    font-size: 1.1rem;
}
.alert i {
    font-size: 1.2rem;
}
h5 a:hover {
    color: #0056b3 !important;
}
.badge {
    font-size: 0.9rem;
    padding: 5px 10px;
}
</style>