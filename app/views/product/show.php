<?php include 'app/views/shares/header.php'; ?>
<div class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white text-center">
            <h2 class="h4 mb-0 fw-bold">Chi tiết sản phẩm</h2>
        </div>
        <div class="card-body">
            <?php if ($product): ?>
                <div class="row g-4">
                    <div class="col-md-6">
                        <?php if ($product->image): ?>
                            <img src="/2280603737_NgoPhanNguyenVu/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                                 class="img-fluid rounded" 
                                 alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" 
                                 style="max-height: 400px; object-fit: cover; border: 1px solid #ddd;">
                        <?php else: ?>
                            <div class="bg-light d-flex align-items-center justify-content-center rounded" style="height: 400px; border: 1px solid #ddd;">
                                <span class="text-muted">Không có ảnh</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <h3 class="card-title text-dark fw-bold mb-3"><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="card-text text-muted"><?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?></p>
                        <p class="text-danger fw-bold h4 mb-3">
                            💰 <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                        </p>
                        <p class="mb-4">
                            <strong>Danh mục:</strong> 
                            <span class="badge bg-info text-white">
                                <?php echo !empty($product->category_name) ? htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8') : 'Chưa có danh mục'; ?>
                            </span>
                        </p>
                        <div class="d-flex gap-2">
                            <a href="/2280603737_NgoPhanNguyenVu/Product/addToCart/<?php echo $product->id; ?>" 
                               class="btn btn-success px-4">➕ Thêm vào giỏ hàng</a>
                            <a href="/2280603737_NgoPhanNguyenVu/Product/list" 
                               class="btn btn-outline-secondary px-4">Quay lại danh sách</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-danger text-center rounded" role="alert">
                    <h4 class="mb-0">Không tìm thấy sản phẩm!</h4>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>

<!-- Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Custom CSS -->
<style>
body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.card {
    border-radius: 10px;
}
.card-header {
    border-radius: 10px 10px 0 0;
}
.img-fluid {
    transition: transform 0.3s ease;
}
.img-fluid:hover {
    transform: scale(1.02);
}
.btn {
    border-radius: 8px;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
}
.btn-success:hover, .btn-outline-secondary:hover {
    filter: brightness(90%);
}
.text-primary {
    color: #007bff !important;
}
.alert {
    border-radius: 8px;
}
.badge {
    font-size: 1rem;
    padding: 8px 12px;
}
</style>