<?php include 'app/views/shares/header.php'; ?>

<style>
/* Background gradient */
.gradient-bg {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
}

.gradient-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
    opacity: 0.4;
}

/* Floating shapes */
.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite;
}

.shape:nth-child(1) {
    width: 100px;
    height: 100px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.shape:nth-child(2) {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 15%;
    animation-delay: 3s;
}

.shape:nth-child(3) {
    width: 80px;
    height: 80px;
    top: 10%;
    right: 20%;
    animation-delay: 6s;
}

.shape:nth-child(4) {
    width: 120px;
    height: 120px;
    bottom: 20%;
    left: 20%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    33% {
        transform: translateY(-30px) rotate(120deg);
    }
    66% {
        transform: translateY(30px) rotate(240deg);
    }
}

/* Card styling */
.product-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border-radius: 20px !important;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 35px 60px rgba(0, 0, 0, 0.15);
}

/* Header styling */
.card-header-custom {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    border-radius: 20px 20px 0 0 !important;
    border: none !important;
    position: relative;
    overflow: hidden;
}

.card-header-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.card-header-custom:hover::before {
    left: 100%;
}

.header-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
}

/* Form styling */
.form-label-custom {
    color: #4a5568;
    font-weight: 600;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.form-control-custom {
    border: 2px solid #e2e8f0;
    border-radius: 12px !important;
    padding: 12px 16px;
    transition: all 0.3s ease;
    background: #f8fafc;
    font-size: 14px;
}

.form-control-custom:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    background: white;
    transform: translateY(-2px);
}

.form-select-custom {
    border: 2px solid #e2e8f0;
    border-radius: 12px !important;
    padding: 12px 16px;
    transition: all 0.3s ease;
    background: #f8fafc;
    font-size: 14px;
}

.form-select-custom:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    background: white;
}

/* File input styling */
.file-input-wrapper {
    position: relative;
    overflow: hidden;
    border: 2px dashed #cbd5e0;
    border-radius: 12px;
    background: #f8fafc;
    transition: all 0.3s ease;
    padding: 30px;
    text-align: center;
}

.file-input-wrapper:hover {
    border-color: #667eea;
    background: #edf2f7;
}

.file-input-wrapper input[type=file] {
    position: absolute;
    left: -9999px;
}

.file-upload-text {
    color: #718096;
    font-size: 14px;
}

.file-upload-icon {
    font-size: 2rem;
    color: #a0aec0;
    margin-bottom: 10px;
}

/* Button styling */
.btn-primary-custom {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 12px;
    padding: 12px 30px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
}

.btn-primary-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-primary-custom:hover::before {
    left: 100%;
}

.btn-secondary-custom {
    background: #f7fafc;
    border: 2px solid #e2e8f0;
    color: #4a5568;
    border-radius: 12px;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-secondary-custom:hover {
    background: #edf2f7;
    border-color: #cbd5e0;
    transform: translateY(-2px);
    color: #2d3748;
}

/* Alert styling */
.alert-custom {
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg, #fed7d7 0%, #feb2b2 100%);
    color: #742a2a;
    border-left: 4px solid #e53e3e;
    box-shadow: 0 4px 12px rgba(229, 62, 62, 0.15);
}

/* Input group styling */
.input-group-custom {
    margin-bottom: 1.5rem;
    position: relative;
}

.input-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
    z-index: 10;
    pointer-events: none;
}

/* Animation for form elements */
.form-element {
    opacity: 0;
    transform: translateY(20px);
    animation: slideUp 0.6s ease forwards;
}

.form-element:nth-child(1) { animation-delay: 0.1s; }
.form-element:nth-child(2) { animation-delay: 0.2s; }
.form-element:nth-child(3) { animation-delay: 0.3s; }
.form-element:nth-child(4) { animation-delay: 0.4s; }
.form-element:nth-child(5) { animation-delay: 0.5s; }
.form-element:nth-child(6) { animation-delay: 0.6s; }

@keyframes slideUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .product-card {
        margin: 15px;
        border-radius: 15px !important;
    }
    
    .card-header-custom {
        border-radius: 15px 15px 0 0 !important;
    }
    
    .header-icon {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }
}
</style>

<div class="gradient-bg">
    <!-- Floating shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container py-5 position-relative" style="z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card product-card border-0 shadow-lg">
                    <div class="card-header card-header-custom text-white p-4">
                        <div class="d-flex align-items-center">
                            <div class="header-icon">
                                <i class="fas fa-plus fa-lg"></i>
                            </div>
                            <div>
                                <h1 class="h3 mb-0">Thêm sản phẩm mới</h1>
                                <small class="opacity-75">Điền thông tin chi tiết sản phẩm</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <?php if (!empty($errors)): ?>
                            <div class="alert alert-custom alert-dismissible fade show form-element" role="alert">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>Có lỗi xảy ra:</strong>
                                </div>
                                <ul class="mb-0">
                                    <?php foreach ($errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST" action="/lab02/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();">
                            <!-- Tên sản phẩm -->
                            <div class="input-group-custom form-element">
                                <label for="name" class="form-label form-label-custom">
                                    <i class="fas fa-tag text-primary"></i>
                                    Tên sản phẩm
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       class="form-control form-control-custom" 
                                       placeholder="Nhập tên sản phẩm..."
                                       required>
                                <i class="fas fa-edit input-icon"></i>
                            </div>

                            <!-- Mô tả -->
                            <div class="input-group-custom form-element">
                                <label for="description" class="form-label form-label-custom">
                                    <i class="fas fa-align-left text-success"></i>
                                    Mô tả sản phẩm
                                </label>
                                <textarea id="description" 
                                          name="description" 
                                          class="form-control form-control-custom" 
                                          rows="5" 
                                          placeholder="Nhập mô tả chi tiết sản phẩm..."
                                          required></textarea>
                                <i class="fas fa-file-alt input-icon"></i>
                            </div>

                            <!-- Giá -->
                            <div class="input-group-custom form-element">
                                <label for="price" class="form-label form-label-custom">
                                    <i class="fas fa-dollar-sign text-warning"></i>
                                    Giá sản phẩm (VNĐ)
                                </label>
                                <input type="number" 
                                       id="price" 
                                       name="price" 
                                       class="form-control form-control-custom" 
                                       step="0.01" 
                                       placeholder="0.00"
                                       required>
                                <i class="fas fa-money-bill-wave input-icon"></i>
                            </div>

                            <!-- Danh mục -->
                            <div class="input-group-custom form-element">
                                <label for="category_id" class="form-label form-label-custom">
                                    <i class="fas fa-list text-info"></i>
                                    Danh mục sản phẩm
                                </label>
                                <select id="category_id" 
                                        name="category_id" 
                                        class="form-select form-select-custom" 
                                        required>
                                    <option value="">-- Chọn danh mục --</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?php echo $category->id; ?>">
                                            <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <i class="fas fa-chevron-down input-icon"></i>
                            </div>

                            <!-- Hình ảnh -->
                            <div class="input-group-custom form-element">
                                <label for="image" class="form-label form-label-custom">
                                    <i class="fas fa-image text-purple"></i>
                                    Hình ảnh sản phẩm
                                </label>
                                <div class="file-input-wrapper" onclick="document.getElementById('image').click();">
                                    <div class="file-upload-icon">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                    <div class="file-upload-text">
                                        <strong>Nhấp để chọn hình ảnh</strong><br>
                                        <small>hoặc kéo thả file vào đây</small><br>
                                        <small class="text-muted">Định dạng: JPG, PNG, GIF (Tối đa 5MB)</small>
                                    </div>
                                    <input type="file" 
                                           id="image" 
                                           name="image" 
                                           accept="image/*"
                                           onchange="updateFileName(this)">
                                </div>
                                <div id="file-name" class="mt-2 text-muted small"></div>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex gap-3 justify-content-end form-element">
                                <a href="/lab02/Product/list" class="btn btn-secondary-custom px-4 py-2">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Quay lại
                                </a>
                                <button type="submit" class="btn btn-primary-custom px-4 py-2">
                                    <i class="fas fa-plus me-2"></i>
                                    Thêm sản phẩm
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// File name display
function updateFileName(input) {
    const fileName = document.getElementById('file-name');
    if (input.files && input.files[0]) {
        fileName.innerHTML = `<i class="fas fa-check-circle text-success me-1"></i>Đã chọn: ${input.files[0].name}`;
        
        // Preview image
        const reader = new FileReader();
        reader.onload = function(e) {
            const wrapper = input.closest('.file-input-wrapper');
            wrapper.style.backgroundImage = `url(${e.target.result})`;
            wrapper.style.backgroundSize = 'cover';
            wrapper.style.backgroundPosition = 'center';
            wrapper.querySelector('.file-upload-text').style.background = 'rgba(0,0,0,0.7)';
            wrapper.querySelector('.file-upload-text').style.color = 'white';
            wrapper.querySelector('.file-upload-text').style.padding = '10px';
            wrapper.querySelector('.file-upload-text').style.borderRadius = '8px';
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        fileName.innerHTML = '';
    }
}

// Form validation
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const description = document.getElementById('description').value.trim();
    const price = document.getElementById('price').value;
    const category = document.getElementById('category_id').value;
    
    if (!name || !description || !price || !category) {
        alert('Vui lòng điền đầy đủ thông tin!');
        return false;
    }
    
    if (price <= 0) {
        alert('Giá sản phẩm phải lớn hơn 0!');
        return false;
    }
    
    // Show loading state
    const submitBtn = document.querySelector('button[type="submit"]');
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Đang xử lý...';
    submitBtn.disabled = true;
    
    return true;
}

// Add floating animation to card
document.addEventListener('DOMContentLoaded', function() {
    const card = document.querySelector('.product-card');
    const container = document.querySelector('.container');
    
    container.addEventListener('mousemove', function(e) {
        const rect = container.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 50;
        const rotateY = (centerX - x) / 50;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });
    
    container.addEventListener('mouseleave', function() {
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
    });
});

// Drag and drop functionality
const fileWrapper = document.querySelector('.file-input-wrapper');
const fileInput = document.getElementById('image');

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    fileWrapper.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

['dragenter', 'dragover'].forEach(eventName => {
    fileWrapper.addEventListener(eventName, highlight, false);
});

['dragleave', 'drop'].forEach(eventName => {
    fileWrapper.addEventListener(eventName, unhighlight, false);
});

function highlight(e) {
    fileWrapper.style.borderColor = '#667eea';
    fileWrapper.style.background = '#edf2f7';
}

function unhighlight(e) {
    fileWrapper.style.borderColor = '#cbd5e0';
    fileWrapper.style.background = '#f8fafc';
}

fileWrapper.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    
    if (files.length > 0) {
        fileInput.files = files;
        updateFileName(fileInput);
    }
}
</script>

<?php include 'app/views/shares/footer.php'; ?>