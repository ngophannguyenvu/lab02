<?php include 'app/views/shares/header.php'; ?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4 p-3 rounded" style="background: linear-gradient(135deg, #007bff, #00d4ff);">
        <h1 class="h2 text-white fw-bold mb-0">Danh sách danh mục</h1>
        <a href="/2280603737_NgoPhanNguyenVu/Category/add" class="btn btn-success d-flex align-items-center gap-2">
            <i class="bi bi-plus-circle"></i> Thêm danh mục mới
        </a>
    </div>

    <?php if (empty($categories)): ?>
        <div class="alert alert-info text-center rounded shadow-sm" role="alert">
            <i class="bi bi-info-circle me-2"></i> Chưa có danh mục nào trong danh sách.
        </div>
    <?php else: ?>
        <ul class="list-group">
            <?php foreach ($categories as $category): ?>
                <li class="list-group-item d-flex justify-content-between align-items-start mb-3 rounded shadow-sm">
                    <div class="flex-grow-1">
                        <h5 class="mb-2 fw-bold">
                            <a href="/2280603737_NgoPhanNguyenVu/Category/show/<?php echo $category->id; ?>" 
                               class="text-decoration-none text-primary">
                                <i class="bi bi-tag-fill me-2 text-primary"></i>
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </h5>
                        <p class="mb-0 text-muted"><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <a href="/2280603737_NgoPhanNguyenVu/Category/show/<?php echo $category->id; ?>" 
                           class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1">
                            <i class="bi bi-eye"></i> Xem
                        </a>
                        <a href="/2280603737_NgoPhanNguyenVu/Category/edit/<?php echo $category->id; ?>" 
                           class="btn btn-outline-warning btn-sm d-flex align-items-center gap-1">
                            <i class="bi bi-pencil"></i> Sửa
                        </a>
                        <a href="/2280603737_NgoPhanNguyenVu/Category/delete/<?php echo $category->id; ?>" 
                           class="btn btn-outline-danger btn-sm d-flex align-items-center gap-1" 
                           onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">
                            <i class="bi bi-trash"></i> Xóa
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
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
.list-group-item {
    border: none;
    border-left: 4px solid #007bff;
    border-radius: 10px;
    margin-bottom: 15px;
    padding: 20px;
    background-color: #fff;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}
.list-group-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    background-color: #f1f8ff;
}
.btn {
    border-radius: 8px;
    padding: 8px 16px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}
.btn-success {
    background: linear-gradient(135deg, #28a745, #34c759);
    border: none;
}
.btn-outline-primary, .btn-outline-warning, .btn-outline-danger {
    border-width: 2px;
}
.btn-outline-primary:hover, .btn-outline-warning:hover, .btn-outline-danger:hover {
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
</style>