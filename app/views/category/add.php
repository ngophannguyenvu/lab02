<?php include 'app/views/shares/header.php'; ?>
<div class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Thêm danh mục mới</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="/2280603737_NgoPhanNguyenVu/Category/save" onsubmit="return validateForm();">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Tên danh mục:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Mô tả:</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Lưu danh mục</button>
                    <a href="/2280603737_NgoPhanNguyenVu/Category" class="btn btn-outline-secondary">Quay lại danh sách</a>
                </div>
            </form>
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
.form-control, .form-select {
    border-radius: 8px;
    transition: border-color 0.3s ease;
}
.form-control:focus, .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
}
.btn {
    border-radius: 8px;
    padding: 10px 20px;
}
.btn-primary:hover, .btn-outline-secondary:hover {
    filter: brightness(90%);
}
.alert {
    border-radius: 8px;
}
</style>

<!-- JavaScript Validation -->
<script>
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const description = document.getElementById('description').value.trim();
    
    if (name.length < 3) {
        alert('Tên danh mục phải có ít nhất 3 ký tự.');
        return false;
    }
    if (description.length < 10) {
        alert('Mô tả phải có ít nhất 10 ký tự.');
        return false;
    }
    return true;
}
</script>