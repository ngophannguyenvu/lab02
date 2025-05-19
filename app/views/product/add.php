<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg rounded-3">
                <div class="card-header bg-primary text-white p-4">
                    <h1 class="h3 mb-0">Thêm sản phẩm mới</h1>
                </div>
                <div class="card-body p-4">
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
                    <form method="POST" action="/2280603737_NgoPhanNguyenVu/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Tên sản phẩm</label>
                            <input type="text" id="name" name="name" class="form-control rounded-3" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Mô tả</label>
                            <textarea id="description" name="description" class="form-control rounded-3" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label fw-bold">Giá</label>
                            <input type="number" id="price" name="price" class="form-control rounded-3" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-bold">Danh mục</label>
                            <select id="category_id" name="category_id" class="form-select rounded-3" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?php echo $category->id; ?>">
                                        <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Hình ảnh</label>
                            <input type="file" id="image" name="image" class="form-control rounded-3">
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4 py-2">Thêm sản phẩm</button>
                            <a href="/2280603737_NgoPhanNguyenVu/Product/list" class="btn btn-outline-secondary px-4 py-2">Quay lại danh sách sản phẩm</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>