<?php include 'app/views/shares/header.php'; ?>
<div class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white text-center">
            <h2 class="h4 mb-0 fw-bold">Chi tiết danh mục</h2>
        </div>
        <div class="card-body">
            <?php if ($category): ?>
                <h3 class="card-title text-dark fw-bold mb-3"><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></h3>
                <p class="card-text text-muted"><?php echo nl2br(htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8')); ?></p>
                <div class="d-flex gap-2 mt-4">
                    <a href="/2280603737_NgoPhanNguyenVu/Category/edit/<?php echo $category->id; ?>" class="btn btn-warning px-4">Sửa</a>
                    <a href="/2280603737_NgoPhanNguyenVu/Category" class="btn btn-outline-secondary px-4">Quay lại danh sách</a>
                </div>
            <?php else: ?>
                <div class="alert alert-danger text-center rounded" role="alert">
                    <h4 class="mb-0">Không tìm thấy danh mục!</h4>
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
.btn {
    border-radius: 8px;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
}
.btn-warning:hover, .btn-outline-secondary:hover {
    filter: brightness(90%);
}
.text-primary {
    color: #007bff !important;
}
.alert {
    border-radius: 8px;
}
</style>