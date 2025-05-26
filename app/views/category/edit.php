<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS -->
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    --warning-gradient: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    --danger-gradient: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    --card-shadow: 0 15px 35px rgba(0,0,0,0.1);
    --hover-shadow: 0 20px 45px rgba(0,0,0,0.15);
}

body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.hero-section {
    background: var(--primary-gradient);
    color: white;
    padding: 50px 0;
    margin-bottom: 40px;
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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
}

.hero-content {
    position: relative;
    z-index: 2;
}

.main-card {
    border: none;
    border-radius: 25px;
    box-shadow: var(--card-shadow);
    overflow: hidden;
    transition: all 0.4s ease;
    background: white;
}

.main-card:hover {
    box-shadow: var(--hover-shadow);
    transform: translateY(-5px);
}

.card-header-custom {
    background: var(--primary-gradient);
    color: white;
    padding: 30px;
    border: none;
    position: relative;
}

.card-header-custom::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0.1) 100%);
}

.header-icon {
    width: 60px;
    height: 60px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    font-size: 1.8rem;
    backdrop-filter: blur(10px);
}

.form-floating {
    margin-bottom: 25px;
    position: relative;
}

.form-control, .form-select {
    border: 2px solid #e9ecef;
    border-radius: 15px;
    padding: 20px 15px;
    font-size: 16px;
    transition: all 0.3s ease;
    background: #fafbfc;
    min-height: 60px;
}

.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
    background: white;
    transform: translateY(-2px);
}

.form-label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 10px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.form-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 25px;
    border-left: 5px solid #667eea;
    position: relative;
}

.section-title {
    color: #2c3e50;
    font-weight: 700;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.2rem;
}

.input-group-custom {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #667eea;
    z-index: 3;
    font-size: 1.1rem;
}

.form-control.with-icon {
    padding-left: 45px;
}

.character-counter {
    position: absolute;
    bottom: -20px;
    right: 10px;
    font-size: 0.8rem;
    color: #7f8c8d;
}

.btn-custom {
    border: none;
    border-radius: 15px;
    padding: 15px 30px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn-custom:hover::before {
    left: 100%;
}

.btn-primary-custom {
    background: var(--primary-gradient);
    color: white;
}

.btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
    color: white;
}

.btn-secondary-custom {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
    color: white;
}

.btn-secondary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(149, 165, 166, 0.4);
    color: white;
}

.validation-feedback {
    display: none;
    margin-top: 8px;
    padding: 10px 15px;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: 500;
}

.validation-feedback.invalid {
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
    color: white;
    display: block;
}

.validation-feedback.valid {
    background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    color: white;
    display: block;
}

.breadcrumb-custom {
    background: white;
    border-radius: 15px;
    padding: 15px 25px;
    margin-bottom: 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.breadcrumb-custom .breadcrumb {
    margin: 0;
    background: none;
    padding: 0;
}

.breadcrumb-custom .breadcrumb-item a {
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumb-custom .breadcrumb-item.active {
    color: #2c3e50;
    font-weight: 600;
}

.progress-bar-custom {
    height: 4px;
    background: var(--primary-gradient);
    border-radius: 2px;
    transition: width 0.3s ease;
    margin-bottom: 20px;
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

.preview-section {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-top: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    border: 2px dashed #e9ecef;
}

.preview-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
}

.preview-card:hover {
    transform: scale(1.02);
}

@media (max-width: 768px) {
    .hero-section {
        padding: 30px 0;
    }
    
    .main-card {
        margin: 15px;
        border-radius: 20px;
    }
    
    .card-header-custom {
        padding: 25px 20px;
    }
    
    .form-section {
        padding: 20px;
    }
    
    .btn-custom {
        width: 100%;
        justify-content: center;
        margin-bottom: 10px;
    }
}

.fade-in {
    animation: fadeIn 0.8s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3">
                        <i class="fas fa-edit me-3"></i>Chỉnh Sửa Danh Mục
                    </h1>
                    <p class="lead mb-0">Cập nhật thông tin danh mục sản phẩm một cách dễ dàng</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-folder-open pulse" style="font-size: 4rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <!-- Breadcrumb -->
    <div class="breadcrumb-custom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/lab02">
                        <i class="fas fa-home me-1"></i>Trang chủ
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/lab02/Category">
                        <i class="fas fa-list me-1"></i>Danh mục
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
            </ol>
        </nav>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card main-card fade-in">
                <div class="card-header-custom">
                    <div class="header-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h2 class="h4 mb-0 fw-bold">Cập Nhật Thông Tin Danh Mục</h2>
                    <p class="mb-0 opacity-75">Điều chỉnh tên và mô tả danh mục</p>
                </div>
                
                <div class="card-body p-4">
                    <!-- Progress Bar -->
                    <div class="progress-bar-custom" id="progressBar" style="width: 0%"></div>
                    
                    <form method="POST" action="/lab02/Category/update" onsubmit="return validateForm();" id="editCategoryForm">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?>">
                        
                        <!-- Basic Information Section -->
                        <div class="form-section">
                            <h5 class="section-title">
                                <i class="fas fa-info-circle text-primary"></i>
                                Thông Tin Cơ Bản
                            </h5>
                            
                            <!-- Category Name -->
                            <div class="input-group-custom">
                                <label for="name" class="form-label">
                                    <i class="fas fa-tag"></i>
                                    Tên danh mục
                                </label>
                                <i class="input-icon fas fa-folder"></i>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       class="form-control with-icon" 
                                       placeholder="Nhập tên danh mục..."
                                       value="<?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>" 
                                       required
                                       maxlength="100"
                                       oninput="validateName(); updateProgress(); updatePreview();">
                                <div class="character-counter">
                                    <span id="nameCounter">0</span>/100
                                </div>
                                <div class="validation-feedback" id="nameValidation"></div>
                            </div>

                            <!-- Category Description -->
                            <div class="input-group-custom">
                                <label for="description" class="form-label">
                                    <i class="fas fa-align-left"></i>
                                    Mô tả danh mục
                                </label>
                                <textarea id="description" 
                                          name="description" 
                                          class="form-control" 
                                          rows="5" 
                                          placeholder="Nhập mô tả chi tiết về danh mục..."
                                          required
                                          maxlength="500"
                                          oninput="validateDescription(); updateProgress(); updatePreview();"><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                                <div class="character-counter">
                                    <span id="descCounter">0</span>/500
                                </div>
                                <div class="validation-feedback" id="descValidation"></div>
                            </div>
                        </div>

                        <!-- Preview Section -->
                        <div class="preview-section">
                            <h5 class="section-title">
                                <i class="fas fa-eye text-success"></i>
                                Xem Trước
                            </h5>
                            <div class="preview-card" id="previewCard">
                                <i class="fas fa-folder fa-2x mb-3"></i>
                                <h6 id="previewName">Tên danh mục</h6>
                                <p id="previewDesc" class="mb-0 opacity-75">Mô tả danh mục</p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-3 justify-content-end mt-4">
                            <a href="/lab02/Category" class="btn btn-secondary-custom">
                                <i class="fas fa-arrow-left"></i>
                                Quay lại
                            </a>
                            <button type="submit" class="btn btn-primary-custom" id="submitBtn">
                                <i class="fas fa-save"></i>
                                <span id="submitText">Lưu thay đổi</span>
                                <span id="loadingText" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i>Đang lưu...
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
let validationState = {
    name: false,
    description: false
};

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    updateCharacterCounters();
    updatePreview();
    updateProgress();
    
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

// Validation functions
function validateName() {
    const name = document.getElementById('name').value.trim();
    const feedback = document.getElementById('nameValidation');
    
    if (name.length < 3) {
        feedback.textContent = 'Tên danh mục phải có ít nhất 3 ký tự';
        feedback.className = 'validation-feedback invalid';
        validationState.name = false;
    } else if (name.length > 100) {
        feedback.textContent = 'Tên danh mục không được vượt quá 100 ký tự';
        feedback.className = 'validation-feedback invalid';
        validationState.name = false;
    } else {
        feedback.textContent = 'Tên danh mục hợp lệ';
        feedback.className = 'validation-feedback valid';
        validationState.name = true;
    }
}

function validateDescription() {
    const description = document.getElementById('description').value.trim();
    const feedback = document.getElementById('descValidation');
    
    if (description.length < 10) {
        feedback.textContent = 'Mô tả phải có ít nhất 10 ký tự';
        feedback.className = 'validation-feedback invalid';
        validationState.description = false;
    } else if (description.length > 500) {
        feedback.textContent = 'Mô tả không được vượt quá 500 ký tự';
        feedback.className = 'validation-feedback invalid';
        validationState.description = false;
    } else {
        feedback.textContent = 'Mô tả hợp lệ';
        feedback.className = 'validation-feedback valid';
        validationState.description = true;
    }
}

function updateCharacterCounters() {
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    
    document.getElementById('nameCounter').textContent = name.length;
    document.getElementById('descCounter').textContent = description.length;
}

function updateProgress() {
    updateCharacterCounters();
    const totalFields = Object.keys(validationState).length;
    const validFields = Object.values(validationState).filter(Boolean).length;
    const progress = (validFields / totalFields) * 100;
    
    document.getElementById('progressBar').style.width = progress + '%';
}

function updatePreview() {
    const name = document.getElementById('name').value || 'Tên danh mục';
    const description = document.getElementById('description').value || 'Mô tả danh mục';
    
    document.getElementById('previewName').textContent = name;
    document.getElementById('previewDesc').textContent = description;
}

function validateForm() {
    validateName();
    validateDescription();
    
    const isValid = Object.values(validationState).every(Boolean);
    
    if (!isValid) {
        showAlert('Vui lòng kiểm tra lại thông tin đã nhập!', 'danger');
        return false;
    }
    
    // Show loading state
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingText = document.getElementById('loadingText');
    
    submitText.style.display = 'none';
    loadingText.style.display = 'inline';
    submitBtn.disabled = true;
    
    return true;
}

function showAlert(message, type) {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
    alertDiv.innerHTML = `
        <i class="fas fa-exclamation-triangle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    const form = document.getElementById('editCategoryForm');
    form.insertBefore(alertDiv, form.firstChild);
    
    // Auto dismiss after 5 seconds
    setTimeout(() => {
        alertDiv.remove();
    }, 5000);
}

// Auto-save draft
let autoSaveTimer;
document.querySelectorAll('input, textarea').forEach(element => {
    element.addEventListener('input', function() {
        clearTimeout(autoSaveTimer);
        autoSaveTimer = setTimeout(() => {
            const formData = new FormData(document.getElementById('editCategoryForm'));
            const data = Object.fromEntries(formData);
            localStorage.setItem('editCategoryDraft', JSON.stringify(data));
        }, 2000);
    });
});

// Load draft on page load
window.addEventListener('load', function() {
    const draft = localStorage.getItem('editCategoryDraft');
    if (draft) {
        const data = JSON.parse(draft);
        if (data.name && data.name !== document.getElementById('name').value) {
            if (confirm('Có bản nháp được lưu trước đó. Bạn có muốn khôi phục không?')) {
                document.getElementById('name').value = data.name || '';
                document.getElementById('description').value = data.description || '';
                updatePreview();
                updateProgress();
            }
        }
    }
});
</script>

<?php include 'app/views/shares/footer.php'; ?>