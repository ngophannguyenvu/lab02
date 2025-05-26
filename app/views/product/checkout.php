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

.checkout-container {
    max-width: 1200px;
    margin: 0 auto;
}

.main-card {
    background: white;
    border-radius: 25px;
    box-shadow: var(--card-shadow);
    overflow: hidden;
    margin-bottom: 30px;
}

.card-header-custom {
    background: var(--primary-gradient);
    color: white;
    padding: 30px;
    text-align: center;
    position: relative;
}

.card-header-custom::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: rgba(255,255,255,0.5);
    border-radius: 2px;
}

.checkout-icon {
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2.5rem;
    backdrop-filter: blur(10px);
}

.progress-steps {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px 0;
    padding: 0 20px;
}

.step {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    flex: 1;
    max-width: 150px;
}

.step-number {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #e9ecef;
    color: #6c757d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

.step.active .step-number {
    background: var(--primary-gradient);
    color: white;
    transform: scale(1.1);
}

.step.completed .step-number {
    background: var(--success-gradient);
    color: white;
}

.step-label {
    font-size: 0.9rem;
    color: #6c757d;
    text-align: center;
    font-weight: 500;
}

.step.active .step-label {
    color: #2c3e50;
    font-weight: 600;
}

.step-connector {
    position: absolute;
    top: 20px;
    left: 50%;
    width: 100%;
    height: 2px;
    background: #e9ecef;
    z-index: -1;
}

.step.completed .step-connector {
    background: var(--success-gradient);
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
    font-size: 1.3rem;
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

.order-summary {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 30px;
    border-left: 5px solid #667eea;
}

.summary-item {
    display: flex;
    justify-content: between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #dee2e6;
}

.summary-item:last-child {
    border-bottom: none;
    font-weight: 700;
    font-size: 1.2rem;
    color: #2c3e50;
}

.payment-methods {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin-bottom: 25px;
}

.payment-option {
    border: 2px solid #e9ecef;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.payment-option:hover {
    border-color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.payment-option.selected {
    border-color: #667eea;
    background: linear-gradient(135deg, #f0f2ff 0%, #e6e9ff 100%);
}

.payment-icon {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #667eea;
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

.security-info {
    background: white;
    border-radius: 15px;
    padding: 20px;
    margin-top: 20px;
    border: 2px solid #e9ecef;
    text-align: center;
}

.security-badges {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 15px;
    flex-wrap: wrap;
}

.security-badge {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #28a745;
    font-size: 0.9rem;
    font-weight: 500;
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

@media (max-width: 768px) {
    .hero-section {
        padding: 30px 0;
    }
    
    .form-section {
        padding: 25px 20px;
    }
    
    .progress-steps {
        flex-direction: column;
        gap: 20px;
    }
    
    .step {
        flex-direction: row;
        max-width: none;
        width: 100%;
    }
    
    .step-connector {
        display: none;
    }
    
    .payment-methods {
        grid-template-columns: 1fr;
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
        <div class="hero-content text-center">
            <h1 class="display-5 fw-bold mb-3">
                <i class="fas fa-credit-card me-3"></i>Thanh Toán Đơn Hàng
            </h1>
            <p class="lead mb-0">Hoàn tất đơn hàng của bạn một cách an toàn và nhanh chóng</p>
        </div>
    </div>
</div>

<div class="container checkout-container mb-5">
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
                    <a href="/lab02/Product">
                        <i class="fas fa-shopping-bag me-1"></i>Sản phẩm
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/lab02/Product/cart">
                        <i class="fas fa-shopping-cart me-1"></i>Giỏ hàng
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
            </ol>
        </nav>
    </div>

    <!-- Progress Steps -->
    <div class="progress-steps">
        <div class="step completed">
            <div class="step-number">1</div>
            <div class="step-label">Giỏ hàng</div>
            <div class="step-connector"></div>
        </div>
        <div class="step active">
            <div class="step-number">2</div>
            <div class="step-label">Thông tin</div>
            <div class="step-connector"></div>
        </div>
        <div class="step">
            <div class="step-number">3</div>
            <div class="step-label">Thanh toán</div>
            <div class="step-connector"></div>
        </div>
        <div class="step">
            <div class="step-number">4</div>
            <div class="step-label">Hoàn thành</div>
        </div>
    </div>

    <div class="row">
        <!-- Checkout Form -->
        <div class="col-lg-8">
            <div class="main-card fade-in">
                <div class="card-header-custom">
                    <div class="checkout-icon pulse">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <h2 class="h4 mb-0 fw-bold">Thông Tin Giao Hàng</h2>
                    <p class="mb-0 opacity-75">Vui lòng điền đầy đủ thông tin để hoàn tất đơn hàng</p>
                </div>

                <div class="form-section">
                    <form method="POST" action="/lab02/Product/processCheckout" id="checkoutForm" onsubmit="return validateForm();">
                        
                        <!-- Customer Information -->
                        <div class="mb-4">
                            <h5 class="section-title">
                                <i class="fas fa-user text-primary"></i>
                                Thông Tin Khách Hàng
                            </h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group-custom">
                                        <label for="name" class="form-label">
                                            <i class="fas fa-user"></i>
                                            Họ và tên
                                        </label>
                                        <i class="input-icon fas fa-user"></i>
                                        <input type="text" 
                                               id="name" 
                                               name="name" 
                                               class="form-control with-icon" 
                                               placeholder="Nhập họ và tên đầy đủ..."
                                               required
                                               oninput="validateName()">
                                        <div class="validation-feedback" id="nameValidation"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group-custom">
                                        <label for="phone" class="form-label">
                                            <i class="fas fa-phone"></i>
                                            Số điện thoại
                                        </label>
                                        <i class="input-icon fas fa-phone"></i>
                                        <input type="tel" 
                                               id="phone" 
                                               name="phone" 
                                               class="form-control with-icon" 
                                               placeholder="Nhập số điện thoại..."
                                               required
                                               oninput="validatePhone()">
                                        <div class="validation-feedback" id="phoneValidation"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group-custom">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope"></i>
                                    Email (tùy chọn)
                                </label>
                                <i class="input-icon fas fa-envelope"></i>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       class="form-control with-icon" 
                                       placeholder="Nhập địa chỉ email..."
                                       oninput="validateEmail()">
                                <div class="validation-feedback" id="emailValidation"></div>
                            </div>
                        </div>

                        <!-- Shipping Information -->
                        <div class="mb-4">
                            <h5 class="section-title">
                                <i class="fas fa-map-marker-alt text-success"></i>
                                Địa Chỉ Giao Hàng
                            </h5>

                            <div class="input-group-custom">
                                <label for="address" class="form-label">
                                    <i class="fas fa-home"></i>
                                    Địa chỉ chi tiết
                                </label>
                                <textarea id="address" 
                                          name="address" 
                                          class="form-control" 
                                          rows="4" 
                                          placeholder="Nhập địa chỉ giao hàng chi tiết (số nhà, tên đường, phường/xã, quận/huyện, tỉnh/thành phố)..."
                                          required
                                          oninput="validateAddress()"></textarea>
                                <div class="validation-feedback" id="addressValidation"></div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="city" name="city" required>
                                            <option value="">Chọn tỉnh/thành phố</option>
                                            <option value="hanoi">Hà Nội</option>
                                            <option value="hcm">TP. Hồ Chí Minh</option>
                                            <option value="danang">Đà Nẵng</option>
                                            <option value="haiphong">Hải Phòng</option>
                                        </select>
                                        <label for="city">Tỉnh/Thành phố</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="district" name="district" required>
                                            <option value="">Chọn quận/huyện</option>
                                        </select>
                                        <label for="district">Quận/Huyện</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="ward" name="ward" required>
                                            <option value="">Chọn phường/xã</option>
                                        </select>
                                        <label for="ward">Phường/Xã</label>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-4">
                            <h5 class="section-title">
                                <i class="fas fa-credit-card text-warning"></i>
                                Phương Thức Thanh Toán
                            </h5>

                            <div class="payment-methods">
                                <div class="payment-option selected" onclick="selectPayment(this, 'cod')">
                                    <div class="payment-icon">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <h6 class="fw-bold">Thanh toán khi nhận hàng</h6>
                                    <p class="text-muted small mb-0">Thanh toán bằng tiền mặt</p>
                                    <input type="radio" name="payment_method" value="cod" checked style="display: none;">
                                </div>
                                <div class="payment-option" onclick="selectPayment(this, 'bank')">
                                    <div class="payment-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <h6 class="fw-bold">Chuyển khoản ngân hàng</h6>
                                    <p class="text-muted small mb-0">Chuyển khoản trực tiếp</p>
                                    <input type="radio" name="payment_method" value="bank" style="display: none;">
                                </div>
                                <div class="payment-option" onclick="selectPayment(this, 'momo')">
                                    <div class="payment-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <h6 class="fw-bold">Ví MoMo</h6>
                                    <p class="text-muted small mb-0">Thanh toán qua ví điện tử</p>
                                    <input type="radio" name="payment_method" value="momo" style="display: none;">
                                </div>
                            </div>
                        </div>

                        <!-- Order Notes -->
                        <div class="mb-4">
                            <h5 class="section-title">
                                <i class="fas fa-sticky-note text-info"></i>
                                Ghi Chú Đơn Hàng (Tùy chọn)
                            </h5>

                            <div class="form-floating">
                                <textarea class="form-control" 
                                          id="notes" 
                                          name="notes" 
                                          style="height: 100px"
                                          placeholder="Nhập ghi chú cho đơn hàng..."></textarea>
                                <label for="notes">Ghi chú đặc biệt cho đơn hàng</label>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-3 justify-content-end">
                            <a href="/lab02/Product/cart" class="btn-secondary-custom">
                                <i class="fas fa-arrow-left"></i>
                                Quay lại giỏ hàng
                            </a>
                            <button type="submit" class="btn-primary-custom" id="submitBtn">
                                <i class="fas fa-lock"></i>
                                <span id="submitText">Xác nhận đặt hàng</span>
                                <span id="loadingText" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i>Đang xử lý...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4">
            <div class="main-card fade-in" style="animation-delay: 0.2s;">
                <div class="card-header-custom">
                    <div class="checkout-icon">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <h3 class="h5 mb-0 fw-bold">Tóm Tắt Đơn Hàng</h3>
                </div>

                <div class="form-section">
                    <div class="order-summary">
                        <div class="summary-item">
                            <span>Tạm tính:</span>
                            <span class="fw-semibold">25.990.000 ₫</span>
                        </div>
                        <div class="summary-item">
                            <span>Phí vận chuyển:</span>
                            <span class="text-success fw-semibold">Miễn phí</span>
                        </div>
                        <div class="summary-item">
                            <span>Giảm giá:</span>
                            <span class="text-danger">-500.000 ₫</span>
                        </div>
                        <div class="summary-item">
                            <span>Tổng cộng:</span>
                            <span class="text-primary">25.490.000 ₫</span>
                        </div>
                    </div>

                    <!-- Security Info -->
                    <div class="security-info">
                        <h6 class="fw-bold mb-3">
                            <i class="fas fa-shield-alt text-success me-2"></i>
                            Bảo Mật & An Toàn
                        </h6>
                        <div class="security-badges">
                            <div class="security-badge">
                                <i class="fas fa-lock"></i>
                                <span>SSL 256-bit</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-check-circle"></i>
                                <span>Bảo mật thanh toán</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-truck"></i>
                                <span>Giao hàng đảm bảo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
let validationState = {
    name: false,
    phone: false,
    address: false
};

// Validation functions
function validateName() {
    const name = document.getElementById('name').value.trim();
    const feedback = document.getElementById('nameValidation');
    
    if (name.length < 2) {
        feedback.textContent = 'Họ tên phải có ít nhất 2 ký tự';
        feedback.className = 'validation-feedback invalid';
        validationState.name = false;
    } else if (!/^[a-zA-ZÀ-ỹ\s]+$/.test(name)) {
        feedback.textContent = 'Họ tên chỉ được chứa chữ cái và khoảng trắng';
        feedback.className = 'validation-feedback invalid';
        validationState.name = false;
    } else {
        feedback.textContent = 'Họ tên hợp lệ';
        feedback.className = 'validation-feedback valid';
        validationState.name = true;
    }
}

function validatePhone() {
    const phone = document.getElementById('phone').value.trim();
    const feedback = document.getElementById('phoneValidation');
    const phoneRegex = /^(0[3|5|7|8|9])+([0-9]{8})$/;
    
    if (!phoneRegex.test(phone)) {
        feedback.textContent = 'Số điện thoại không hợp lệ (VD: 0901234567)';
        feedback.className = 'validation-feedback invalid';
        validationState.phone = false;
    } else {
        feedback.textContent = 'Số điện thoại hợp lệ';
        feedback.className = 'validation-feedback valid';
        validationState.phone = true;
    }
}

function validateEmail() {
    const email = document.getElementById('email').value.trim();
    const feedback = document.getElementById('emailValidation');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (email && !emailRegex.test(email)) {
        feedback.textContent = 'Địa chỉ email không hợp lệ';
        feedback.className = 'validation-feedback invalid';
    } else if (email) {
        feedback.textContent = 'Email hợp lệ';
        feedback.className = 'validation-feedback valid';
    } else {
        feedback.style.display = 'none';
    }
}

function validateAddress() {
    const address = document.getElementById('address').value.trim();
    const feedback = document.getElementById('addressValidation');
    
    if (address.length < 10) {
        feedback.textContent = 'Địa chỉ phải có ít nhất 10 ký tự';
        feedback.className = 'validation-feedback invalid';
        validationState.address = false;
    } else {
        feedback.textContent = 'Địa chỉ hợp lệ';
        feedback.className = 'validation-feedback valid';
        validationState.address = true;
    }
}

function selectPayment(element, method) {
    // Remove selected class from all options
    document.querySelectorAll('.payment-option').forEach(option => {
        option.classList.remove('selected');
    });
    
    // Add selected class to clicked option
    element.classList.add('selected');
    
    // Check the radio button
    element.querySelector('input[type="radio"]').checked = true;
}

function validateForm() {
    validateName();
    validatePhone();
    validateAddress();
    
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
    
    const form = document.getElementById('checkoutForm');
    form.insertBefore(alertDiv, form.firstChild);
    
    // Auto dismiss after 5 seconds
    setTimeout(() => {
        alertDiv.remove();
    }, 5000);
}

// Format phone number input
document.getElementById('phone').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 10) value = value.slice(0, 10);
    e.target.value = value;
});

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Auto-focus first input
    document.getElementById('name').focus();
    
    // Add smooth scroll to form sections
    document.querySelectorAll('.section-title').forEach(title => {
        title.addEventListener('click', function() {
            this.parentElement.scrollIntoView({ behavior: 'smooth' });
        });
    });
});
</script>

<?php include 'app/views/shares/footer.php'; ?>