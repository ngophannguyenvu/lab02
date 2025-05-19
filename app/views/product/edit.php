<?php include 'app/views/shares/header.php'; ?>
<div class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Sửa sản phẩm</h1>
        </div>
        <div class="card-body">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form method="POST" action="/2280603737_NgoPhanNguyenVu/Product/update" enctype="multipart/form-data" onsubmit="return validateForm();">
                <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Mô tả:</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Giá (VND):</label>
                    <input type="number" id="price" name="price" class="form-control" step="0.01" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="category_id" class="form-label fw-bold">Danh mục:</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>" <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Hình ảnh:</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
                    <?php if ($product->image): ?>
                        <div class="mt-2">
                            <img src="/<?php echo $product->image; ?>" alt="Product Image" class="img-fluid rounded" style="max-width: 150px; border: 1px solid #ddd;">
                        </div>
                    <?php endif; ?>
                    <small class="form-text text-muted">Chọn hình ảnh mới để cập nhật (để trống nếu không thay đổi).</small>
                </div>
                
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    <a href="/2280603737_NgoPhanNguyenVu/Product/list" class="btn btn-outline-secondary">Quay lại danh sách sản phẩm</a>
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
.btn-primary {
    border-radius: 8px;
    padding: 10px 20px;
}
.btn-outline-secondary {
    border-radius: 8px;
}
.alert {
    border-radius: 8px;
}
</style>

<!-- JavaScript Validation -->
<script>
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const price = document.getElementById('price').value;
    const description = document.getElementById('description').value.trim();
    
    if (name.length < 3) {
        alert('Tên sản phẩm phải có ít nhất 3 ký tự.');
        return false;
    }
    if (price <= 0) {
        alert('Giá sản phẩm phải lớn hơn 0.');
        return false;
    }
    if (description.length < 10) {
        alert('Mô tả phải có ít nhất 10 ký tự.');
        return false;
    }
    return true;
}
</script>