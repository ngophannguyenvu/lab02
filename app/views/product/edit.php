<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS -->
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    --warning-gradient: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    --danger-gradient: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
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
    padding: 40px 0;
    margin-bottom: 30px;
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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.1;
}

.main-card {
    border: none;
    border-radius: 20px;
    box-shadow: var(--card-shadow);
    overflow: hidden;
    transition: all 0.3s ease;
    background: white;
}

.main-card:hover {
    box-shadow: var(--hover-shadow);
    transform: translateY(-5px);
}

.card-header-custom {
    background: var(--primary-gradient);
    color: white;
    padding: 25px 30px;
    border: none;
    position: relative;
}

.card-header-custom::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0.1) 100%);
}

.form-floating {
    margin-bottom: 20px;
}

.form-control, .form-select {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 15px;
    font-size: 16px;
    transition: all 0.3s ease;
    background: #fafbfc;
}

.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    background: white;
    transform: translateY(-2px);
}

.form-label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 8px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.image-preview-container {
    position: relative;
    display: inline-block;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.image-preview-container:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.image-preview {
    max-width: 200px;
    height: 200px;
    object-fit: cover;
    border: 3px solid white;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.image-preview-container:hover .image-overlay {
    opacity: 1;
}

.btn-custom {
    border: none;
    border-radius: 12px;
    padding: 12px 30px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-primary-custom {
    background: var(--primary-gradient);
    color: white;
}

.btn-primary-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

.btn-secondary-custom {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
    color: white;
}

.btn-secondary-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(149, 165, 166, 0.4);
}

.alert-custom {
    border: none;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 25px;
    background: var(--danger-gradient);
    color: white;
    box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
}

.file-input-wrapper {
    position: relative;
    display: inline-block;
    cursor: pointer;
    width: 100%;
}

.file-input-custom {
    position: absolute;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.file-input-label {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border: 2px dashed #667eea;
    border-radius: 12px;
    background: #f8f9ff;
    transition: all 0.3s ease;
    cursor: pointer;
}

.file-input-label:hover {
    border-color: #5a67d8;
    background: #f0f2ff;
    transform: translateY(-2px);
}

.progress-bar-custom {
    height: 4px;
    background: var(--primary-gradient);
    border-radius: 2px;
    transition: width 0.3s ease;
}

.form-section {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border-left: 4px solid #667eea;
}

.section-title {
    color: #2c3e50;
    font-weight: 700;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
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
        padding: 20px 0;
    }
    
    .main-card {
        margin: 10px;
        border-radius: 15px;
    }
    
    .card-header-custom {
        padding: 20px;
    }
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold mb-2">
                    <i class="fas fa-edit me-3"></i>Chỉnh Sửa Sản Phẩm
                </h1>
                <p class="lead mb-0">Cập nhật thông tin sản phẩm một cách dễ dàng</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-mobile-alt" style="font-size: 4rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card main-card">
                <div class="card-header-custom">
                    <h2 class="h4 mb-0 d-flex align-items-center">
                        <i class="fas fa-cog me-2"></i>
                        Thông Tin Sản Phẩm
                    </h2>
                </div>
                
                <div class="card-body p-4">
                    <!-- Error Messages -->
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-custom" role="alert">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Có lỗi xảy ra:</strong>
                            </div>
                            <ul class="mb-0 ps-3">
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="/lab02/Product/update" enctype="multipart/form-data" onsubmit="return validateForm();" id="editForm">
                        <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                        
                        <!-- Basic Information Section -->
                        <div class="form-section">
                            <h5 class="section-title">
                                <i class="fas fa-info-circle text-primary"></i>
                                Thông Tin Cơ Bản
                            </h5>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" 
                                               id="name" 
                                               name="name" 
                                               class="form-control" 
                                               placeholder="Tên sản phẩm"
                                               value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" 
                                               required>
                                        <label for="name">
                                            <i class="fas fa-tag me-2"></i>Tên sản phẩm
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" 
                                               id="price" 
                                               name="price" 
                                               class="form-control" 
                                               placeholder="Giá sản phẩm"
                                               step="1000" 
                                               value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" 
                                               required>
                                        <label for="price">
                                            <i class="fas fa-dollar-sign me-2"></i>Giá (VND)
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select id="category_id" name="category_id" class="form-select" required>
                                            <option value="">Chọn danh mục</option>
                                            <?php foreach ($categories as $category): ?>
                                                <option value="<?php echo $category->id; ?>" 
                                                        <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
                                                    <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label for="category_id">
                                            <i class="fas fa-list me-2"></i>Danh mục
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating">
                                <textarea id="description" 
                                          name="description" 
                                          class="form-control" 
                                          placeholder="Mô tả sản phẩm"
                                          style="height: 120px" 
                                          required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                                <label for="description">
                                    <i class="fas fa-align-left me-2"></i>Mô tả sản phẩm
                                </label>
                            </div>
                        </div>

                        <!-- Image Section -->
                        <div class="form-section">
                            <h5 class="section-title">
                                <i class="fas fa-image text-success"></i>
                                Hình Ảnh Sản Phẩm
                            </h5>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-input-wrapper">
                                        <input type="file" 
                                               id="image" 
                                               name="image" 
                                               class="file-input-custom" 
                                               accept="image/*"
                                               onchange="previewImage(this)">
                                        <div class="file-input-label">
                                            <div class="text-center">
                                                <i class="fas fa-cloud-upload-alt fa-2x text-primary mb-2"></i>
                                                <div class="fw-semibold">Chọn hình ảnh mới</div>
                                                <small class="text-muted">Hoặc kéo thả file vào đây</small>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
                                </div>
                                
                                <div class="col-md-6">
                                    <?php if ($product->image): ?>
                                        <div class="text-center">
                                            <label class="form-label">Hình ảnh hiện tại:</label>
                                            <div class="image-preview-container">
                                                <img src="/<?php echo $product->image; ?>" 
                                                     alt="Product Image" 
                                                     class="image-preview"
                                                     id="currentImage">
                                                <div class="image-overlay">
                                                    <i class="fas fa-eye text-white fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="text-center text-muted">
                                            <i class="fas fa-image fa-3x mb-2"></i>
                                            <p>Chưa có hình ảnh</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-3 justify-content-end">
                            <a href="/lab02/Product" class="btn btn-secondary-custom">
                                <i class="fas fa-arrow-left me-2"></i>
                                Quay lại
                            </a>
                            <button type="submit" class="btn btn-primary-custom" id="submitBtn">
                                <i class="fas fa-save me-2"></i>
                                <span id="submitText">Lưu thay đổi</span>
                                <span id="loadingText" style="display: none;">
                                    <i class="fas fa-spinner fa-spin me-2"></i>Đang lưu...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Floating Help Button -->
<div class="floating-action">
    <button class="btn btn-floating" data-bs-toggle="tooltip" data-bs-placement="left" title="Cần hỗ trợ?">
        <i class="fas fa-question"></i>
    </button>
</div>

<!-- JavaScript -->
<script>
// Form validation
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const price = document.getElementById('price').value;
    const description = document.getElementById('description').value.trim();
    const category = document.getElementById('category_id').value;
    
    // Show loading state
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingText = document.getElementById('loadingText');
    
    if (name.length < 3) {
        showAlert('Tên sản phẩm phải có ít nhất 3 ký tự.', 'danger');
        return false;
    }
    if (price <= 0) {
        showAlert('Giá sản phẩm phải lớn hơn 0.', 'danger');
        return false;
    }
    if (description.length < 10) {
        showAlert('Mô tả phải có ít nhất 10 ký tự.', 'danger');
        return false;
    }
    if (!category) {
        showAlert('Vui lòng chọn danh mục sản phẩm.', 'danger');
        return false;
    }
    
    // Show loading state
    submitText.style.display = 'none';
    loadingText.style.display = 'inline';
    submitBtn.disabled = true;
    
    return true;
}

// Image preview
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const currentImage = document.getElementById('currentImage');
            if (currentImage) {
                currentImage.src = e.target.result;
            } else {
                // Create new image preview if doesn't exist
                const col = document.querySelector('.col-md-6:last-child');
                col.innerHTML = `
                    <div class="text-center">
                        <label class="form-label">Hình ảnh mới:</label>
                        <div class="image-preview-container">
                            <img src="${e.target.result}" alt="New Image" class="image-preview" id="currentImage">
                            <div class="image-overlay">
                                <i class="fas fa-eye text-white fa-2x"></i>
                            </div>
                        </div>
                    </div>
                `;
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
}

// Show alert function
function showAlert(message, type) {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
    alertDiv.innerHTML = `
        <i class="fas fa-exclamation-triangle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    const form = document.getElementById('editForm');
    form.insertBefore(alertDiv, form.firstChild);
    
    // Auto dismiss after 5 seconds
    setTimeout(() => {
        alertDiv.remove();
    }, 5000);
}

// Format price input
document.getElementById('price').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    e.target.value = value;
});

// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

// Auto-save draft (optional)
let autoSaveTimer;
document.querySelectorAll('input, textarea, select').forEach(element => {
    element.addEventListener('input', function() {
        clearTimeout(autoSaveTimer);
        autoSaveTimer = setTimeout(() => {
            // Save draft to localStorage
            const formData = new FormData(document.getElementById('editForm'));
            const data = Object.fromEntries(formData);
            localStorage.setItem('editProductDraft', JSON.stringify(data));
        }, 2000);
    });
});
</script>

<?php include 'app/views/shares/footer.php'; ?>