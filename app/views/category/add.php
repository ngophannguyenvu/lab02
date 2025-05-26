<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS -->
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    --warning-gradient: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    --danger-gradient: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    --info-gradient: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
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
    width: 70px;
    height: 70px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 2rem;
    backdrop-filter: blur(10px);
    animation: pulse 2s infinite;
}

.form-section {
    padding: 40px;
}

.section-title {
    color: #2c3e50;
    font-weight: 700;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.2rem;
    padding-bottom: 15px;
    border-bottom: 2px solid #f8f9fa;
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
    transition: color 0.3s ease;
}

.character-counter.warning {
    color: #f39c12;
}

.character-counter.danger {
    color: #e74c3c;
}

.validation-feedback {
    display: none;
    margin-top: 8px;
    padding: 10px 15px;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: 500;
    animation: slideIn 0.3s ease;
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

.btn-custom {
    border: none;
    border-radius: 15px;
    padding: 15px 30px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    position: relative;
    overflow: hidden;
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

.progress-bar-custom {
    height: 6px;
    background: var(--primary-gradient);
    border-radius: 3px;
    transition: width 0.3s ease;
    margin-bottom: 25px;
}

.preview-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    padding: 25px;
    margin-top: 25px;
    border-left: 5px solid #667eea;
    position: relative;
}

.preview-card {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.preview-card:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
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

.tips-section {
    background: linear-gradient(135deg, #e8f5e8 0%, #d4edda 100%);
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 25px;
    border-left: 4px solid #28a745;
}

.tip-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 10px;
}

.tip-item:last-child {
    margin-bottom: 0;
}

.tip-icon {
    color: #28a745;
    margin-top: 2px;
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
        padding: 25px 20px;
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

@keyframes slideIn {
    from { opacity: 0; transform: translateX(-20px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.success-animation {
    animation: successPulse 0.6s ease;
}

@keyframes successPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
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
                        <i class="fas fa-plus-circle me-3"></i>Tạo Danh Mục Mới
                    </h1>
                    <p class="lead mb-0">Thêm danh mục sản phẩm mới để tổ chức cửa hàng hiệu quả hơn</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-folder-plus" style="font-size: 4rem; opacity: 0.3; animation: pulse 2s infinite;"></i>
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
                <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
            </ol>
        </nav>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Tips Section -->
            <div class="tips-section fade-in">
                <h6 class="fw-bold mb-3">
                    <i class="fas fa-lightbulb me-2 text-warning"></i>
                    Mẹo tạo danh mục hiệu quả
                </h6>
                <div class="tip-item">
                    <i class="fas fa-check-circle tip-icon"></i>
                    <span>Sử dụng tên danh mục ngắn gọn, dễ hiểu</span>
                </div>
                <div class="tip-item">
                    <i class="fas fa-check-circle tip-icon"></i>
                    <span>Mô tả chi tiết giúp khách hàng dễ tìm kiếm</span>
                </div>
                <div class="tip-item">
                    <i class="fas fa-check-circle tip-icon"></i>
                    <span>Tránh tạo quá nhiều danh mục con không cần thiết</span>
                </div>
            </div>

            <div class="main-card fade-in" style="animation-delay: 0.2s;">
                <div class="card-header-custom">
                    <div class="header-icon">
                        <i class="fas fa-folder-plus"></i>
                    </div>
                    <h2 class="h4 mb-0 fw-bold">Thông Tin Danh Mục</h2>
                    <p class="mb-0 opacity-75">Điền thông tin chi tiết cho danh mục mới</p>
                </div>
                
                <div class="form-section">
                    <!-- Progress Bar -->
                    <div class="progress-bar-custom" id="progressBar" style="width: 0%"></div>
                    
                    <form method="POST" action="/lab02/Category/save" onsubmit="return validateForm();" id="addCategoryForm">
                        
                        <!-- Basic Information -->
                        <div class="mb-4">
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
                                       placeholder="VD: Điện thoại thông minh, Phụ kiện..."
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
                                          placeholder="Mô tả chi tiết về danh mục này, bao gồm các loại sản phẩm và đặc điểm..."
                                          required
                                          maxlength="500"
                                          oninput="validateDescription(); updateProgress(); updatePreview();"></textarea>
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
                                Xem Trước Danh Mục
                            </h5>
                            <div class="preview-card" id="previewCard">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <div style="width: 50px; height: 50px; background: var(--primary-gradient); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                            <i class="fas fa-folder"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-2" id="previewName">Tên danh mục sẽ hiển thị ở đây</h6>
                                        <p class="text-muted mb-0" id="previewDesc">Mô tả danh mục sẽ hiển thị ở đây</p>
                                        <div class="mt-2">
                                            <span class="badge bg-primary">Danh mục mới</span>
                                            <span class="badge bg-success">Đang hoạt động</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-3 justify-content-end mt-4">
                            <a href="/lab02/Category" class="btn-secondary-custom">
                                <i class="fas fa-arrow-left"></i>
                                Quay lại danh sách
                            </a>
                            <button type="submit" class="btn-primary-custom" id="submitBtn">
                                <i class="fas fa-save"></i>
                                <span id="submitText">Tạo danh mục</span>
                                <span id="loadingText" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i>Đang tạo...
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
    
    // Auto-focus first input
    document.getElementById('name').focus();
    
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
    } else if (!/^[a-zA-ZÀ-ỹ0-9\s\-_]+$/.test(name)) {
        feedback.textContent = 'Tên danh mục chỉ được chứa chữ cái, số, dấu gạch ngang và gạch dưới';
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
    
    const nameCounter = document.getElementById('nameCounter');
    const descCounter = document.getElementById('descCounter');
    
    nameCounter.textContent = name.length;
    descCounter.textContent = description.length;
    
    // Update counter colors
    nameCounter.parentElement.className = 'character-counter';
    if (name.length > 80) nameCounter.parentElement.classList.add('warning');
    if (name.length > 95) nameCounter.parentElement.classList.add('danger');
    
    descCounter.parentElement.className = 'character-counter';
    if (description.length > 400) descCounter.parentElement.classList.add('warning');
    if (description.length > 480) descCounter.parentElement.classList.add('danger');
}

function updateProgress() {
    updateCharacterCounters();
    const totalFields = Object.keys(validationState).length;
    const validFields = Object.values(validationState).filter(Boolean).length;
    const progress = (validFields / totalFields) * 100;
    
    document.getElementById('progressBar').style.width = progress + '%';
}

function updatePreview() {
    const name = document.getElementById('name').value || 'Tên danh mục sẽ hiển thị ở đây';
    const description = document.getElementById('description').value || 'Mô tả danh mục sẽ hiển thị ở đây';
    
    document.getElementById('previewName').textContent = name;
    document.getElementById('previewDesc').textContent = description;
    
    // Add animation when preview updates
    const previewCard = document.getElementById('previewCard');
    previewCard.classList.add('success-animation');
    setTimeout(() => {
        previewCard.classList.remove('success-animation');
    }, 600);
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
    
    const form = document.getElementById('addCategoryForm');
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
            const formData = new FormData(document.getElementById('addCategoryForm'));
            const data = Object.fromEntries(formData);
            localStorage.setItem('addCategoryDraft', JSON.stringify(data));
        }, 2000);
    });
});

// Load draft on page load
window.addEventListener('load', function() {
    const draft = localStorage.getItem('addCategoryDraft');
    if (draft) {
        const data = JSON.parse(draft);
        if (data.name || data.description) {
            if (confirm('Có bản nháp được lưu trước đó. Bạn có muốn khôi phục không?')) {
                document.getElementById('name').value = data.name || '';
                document.getElementById('description').value = data.description || '';
                updatePreview();
                updateProgress();
                validateName();
                validateDescription();
            }
        }
    }
});

// Clear draft after successful submission
document.getElementById('addCategoryForm').addEventListener('submit', function() {
    localStorage.removeItem('addCategoryDraft');
});

// Suggest category names
const categoryNames = [
    'Điện thoại thông minh',
    'Phụ kiện điện thoại',
    'Tai nghe',
    'Sạc dự phòng',
    'Ốp lưng bảo vệ',
    'Máy tính bảng',
    'Đồng hồ thông minh',
    'Loa bluetooth'
];

document.getElementById('name').addEventListener('focus', function() {
    // You can implement autocomplete suggestions here
});
</script>

<?php include 'app/views/shares/footer.php'; ?>