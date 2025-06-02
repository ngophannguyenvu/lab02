<?php include 'app/views/shares/header.php'; ?>

<style>
/* Background gradient với animation */
.register-bg {
    background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe);
    background-size: 400% 400%;
    animation: gradientShift 20s ease infinite;
    min-height: 100vh;
    position: relative;
    overflow: hidden;
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    25% { background-position: 100% 50%; }
    50% { background-position: 100% 100%; }
    75% { background-position: 0% 100%; }
    100% { background-position: 0% 50%; }
}

/* Floating shapes */
.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
    pointer-events: none;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite;
}

.shape:nth-child(1) {
    width: 80px;
    height: 80px;
    top: 10%;
    left: 10%;
    animation-delay: 0s;
}

.shape:nth-child(2) {
    width: 120px;
    height: 120px;
    top: 70%;
    right: 10%;
    animation-delay: 2s;
}

.shape:nth-child(3) {
    width: 60px;
    height: 60px;
    top: 30%;
    right: 30%;
    animation-delay: 4s;
}

.shape:nth-child(4) {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 20%;
    animation-delay: 1s;
}

.shape:nth-child(5) {
    width: 90px;
    height: 90px;
    top: 50%;
    left: 70%;
    animation-delay: 3s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.7;
    }
    33% {
        transform: translateY(-30px) rotate(120deg);
        opacity: 1;
    }
    66% {
        transform: translateY(30px) rotate(240deg);
        opacity: 0.8;
    }
}

/* Register card */
.register-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.2);
    border-radius: 25px;
    position: relative;
    z-index: 2;
    overflow: hidden;
    transition: all 0.3s ease;
}

.register-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
    z-index: -1;
    pointer-events: none;
}

.register-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 35px 60px rgba(0, 0, 0, 0.3);
}

/* Header section */
.register-header {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
}

.register-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    position: relative;
    animation: iconFloat 3s ease-in-out infinite;
}

.register-icon::before {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c);
    border-radius: 50%;
    z-index: -1;
    animation: rotate 4s linear infinite;
    pointer-events: none;
}

@keyframes iconFloat {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.register-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
    background: linear-gradient(135deg, #fff, rgba(255, 255, 255, 0.8));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
}

.register-subtitle {
    color: rgba(255, 255, 255, 0.8);
    font-size: 16px;
    margin-bottom: 0;
}

/* Form styling */
.form-group-custom {
    position: relative;
    margin-bottom: 2rem;
}

.form-control-custom {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    color: white;
    padding: 15px 20px 15px 50px;
    font-size: 16px;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.form-control-custom:focus {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.5);
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
    color: white;
    outline: none;
}

.form-control-custom::placeholder {
    color: rgba(255, 255, 255, 0.7);
    text-transform: capitalize;
}

.input-icon {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.7);
    font-size: 18px;
    z-index: 3;
}

/* Password strength indicator */
.password-strength {
    height: 4px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 2px;
    margin-top: 8px;
    overflow: hidden;
}

.password-strength-bar {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.strength-weak { background: #ff4757; width: 25%; }
.strength-fair { background: #ffa502; width: 50%; }
.strength-good { background: #2ed573; width: 75%; }
.strength-strong { background: #1e90ff; width: 100%; }

/* Button styling */
.btn-register {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    border-radius: 15px;
    padding: 15px 50px;
    font-weight: 600;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    width: 100%;
    margin-top: 20px;
}

.btn-register::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
    pointer-events: none;
}

.btn-register:hover {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.2));
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    color: white;
}

.btn-register:hover::before {
    left: 100%;
}

.btn-register:active {
    transform: translateY(-1px);
}

/* Error messages */
.error-list {
    background: rgba(220, 53, 69, 0.2);
    border: 1px solid rgba(220, 53, 69, 0.3);
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    animation: slideDown 0.3s ease;
}

.error-list ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.error-list li {
    color: #fff;
    padding: 5px 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.error-list li::before {
    content: '\f071';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: #ff6b7a;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Login link */
.login-link {
    text-align: center;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.login-link a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.login-link a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: white;
    transition: width 0.3s ease;
}

.login-link a:hover {
    color: white;
    text-decoration: none;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}

.login-link a:hover::after {
    width: 100%;
}

/* Loading animation */
.loading-spinner {
    display: none;
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    border-top-color: white;
    animation: spin 1s ease-in-out infinite;
    margin-right: 10px;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .register-card {
        margin: 20px;
        border-radius: 20px;
    }
    
    .register-icon {
        width: 80px;
        height: 80px;
        margin-bottom: 15px;
    }
    
    .register-title {
        font-size: 2rem;
    }
    
    .form-control-custom {
        padding: 12px 15px 12px 45px;
        font-size: 14px;
    }
    
    .input-icon {
        left: 15px;
        font-size: 16px;
    }
    
    .btn-register {
        padding: 12px 30px;
        font-size: 16px;
    }
}

/* Form validation styling */
.form-control-custom.is-valid {
    border-color: rgba(40, 167, 69, 0.8);
    box-shadow: 0 0 15px rgba(40, 167, 69, 0.3);
}

.form-control-custom.is-invalid {
    border-color: rgba(220, 53, 69, 0.8);
    box-shadow: 0 0 15px rgba(220, 53, 69, 0.3);
}

.valid-feedback, .invalid-feedback {
    color: white;
    font-size: 14px;
    margin-top: 5px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.valid-feedback::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: #28a745;
}

.invalid-feedback::before {
    content: '\f00d';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: #dc3545;
}
</style>

<div class="register-bg">
    <!-- Floating shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card register-card border-0">
                    <div class="card-body p-5">
                        <!-- Header -->
                        <div class="register-header">
                            <div class="register-icon">
                                <i class="fas fa-user-plus fa-2x text-white"></i>
                            </div>
                            <h2 class="register-title">Create Account</h2>
                            <p class="register-subtitle">Join us today! Fill in your details below</p>
                        </div>

                        <!-- Error messages -->
                        <?php if (isset($errors) && !empty($errors)): ?>
                            <div class="error-list">
                                <ul>
                                    <?php foreach ($errors as $err): ?>
                                        <li><?php echo htmlspecialchars($err); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- Registration Form -->
                        <form class="user" action="/lab02/account/save" method="post" id="registerForm">
                            <div class="row">
                                <!-- Username -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <i class="fas fa-user input-icon"></i>
                                        <input type="text" 
                                               class="form-control form-control-custom"
                                               id="username" 
                                               name="username" 
                                               placeholder="Username"
                                               required>
                                        <div class="invalid-feedback"></div>
                                        <div class="valid-feedback"></div>
                                    </div>
                                </div>

                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <i class="fas fa-id-card input-icon"></i>
                                        <input type="text" 
                                               class="form-control form-control-custom"
                                               id="fullname" 
                                               name="fullname" 
                                               placeholder="Full Name"
                                               required>
                                        <div class="invalid-feedback"></div>
                                        <div class="valid-feedback"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Password -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <i class="fas fa-lock input-icon"></i>
                                        <input type="password" 
                                               class="form-control form-control-custom"
                                               id="password" 
                                               name="password" 
                                               placeholder="Password"
                                               required>
                                        <div class="password-strength">
                                            <div class="password-strength-bar" id="strengthBar"></div>
                                        </div>
                                        <div class="invalid-feedback"></div>
                                        <div class="valid-feedback"></div>
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <i class="fas fa-lock input-icon"></i>
                                        <input type="password" 
                                               class="form-control form-control-custom"
                                               id="confirmpassword" 
                                               name="confirmpassword" 
                                               placeholder="Confirm Password"
                                               required>
                                        <div class="invalid-feedback"></div>
                                        <div class="valid-feedback"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Register Button -->
                            <button type="submit" class="btn btn-register">
                                <span class="loading-spinner"></span>
                                <i class="fas fa-user-plus me-2"></i>
                                Create Account
                            </button>
                        </form>

                        <!-- Login Link -->
                        <div class="login-link">
                            <p class="text-white-50 mb-0">
                                Already have an account? 
                                <a href="/lab02/account/login">
                                    <i class="fas fa-sign-in-alt me-1"></i>
                                    Sign In
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registerForm');
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirmpassword');
    const strengthBar = document.getElementById('strengthBar');

    // Password strength checker
    passwordField.addEventListener('input', function() {
        const password = this.value;
        const strength = checkPasswordStrength(password);
        updatePasswordStrength(strength);
        validatePassword();
    });

    // Confirm password validation
    confirmPasswordField.addEventListener('input', validatePasswordMatch);

    // Username validation
    document.getElementById('username').addEventListener('input', validateUsername);

    // Full name validation
    document.getElementById('fullname').addEventListener('input', validateFullname);

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            showLoading();
            // Submit form
            this.submit();
        }
    });

    function checkPasswordStrength(password) {
        let strength = 0;
        
        if (password.length >= 8) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;
        
        return strength;
    }

    function updatePasswordStrength(strength) {
        strengthBar.className = 'password-strength-bar';
        
        switch(strength) {
            case 0:
            case 1:
                strengthBar.classList.add('strength-weak');
                break;
            case 2:
                strengthBar.classList.add('strength-fair');
                break;
            case 3:
            case 4:
                strengthBar.classList.add('strength-good');
                break;
            case 5:
                strengthBar.classList.add('strength-strong');
                break;
        }
    }

    function validatePassword() {
        const password = passwordField.value;
        const isValid = password.length >= 6;
        
        if (password.length === 0) {
            passwordField.classList.remove('is-valid', 'is-invalid');
            return;
        }
        
        if (isValid) {
            passwordField.classList.remove('is-invalid');
            passwordField.classList.add('is-valid');
            passwordField.nextElementSibling.nextElementSibling.textContent = 'Password looks good!';
        } else {
            passwordField.classList.remove('is-valid');
            passwordField.classList.add('is-invalid');
            passwordField.nextElementSibling.nextElementSibling.textContent = 'Password must be at least 6 characters long';
        }
        
        // Re-validate confirm password if it has value
        if (confirmPasswordField.value) {
            validatePasswordMatch();
        }
    }

    function validatePasswordMatch() {
        const password = passwordField.value;
        const confirmPassword = confirmPasswordField.value;
        
        if (confirmPassword.length === 0) {
            confirmPasswordField.classList.remove('is-valid', 'is-invalid');
            return;
        }
        
        if (password === confirmPassword && password.length >= 6) {
            confirmPasswordField.classList.remove('is-invalid');
            confirmPasswordField.classList.add('is-valid');
            confirmPasswordField.nextElementSibling.textContent = 'Passwords match!';
        } else {
            confirmPasswordField.classList.remove('is-valid');
            confirmPasswordField.classList.add('is-invalid');
            confirmPasswordField.nextElementSibling.textContent = 'Passwords do not match';
        }
    }

    function validateUsername() {
        const username = this.value;
        const isValid = username.length >= 3 && /^[a-zA-Z0-9_]+$/.test(username);
        
        if (username.length === 0) {
            this.classList.remove('is-valid', 'is-invalid');
            return;
        }
        
        if (isValid) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            this.nextElementSibling.nextElementSibling.textContent = 'Username is available!';
        } else {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
            this.nextElementSibling.textContent = 'Username must be at least 3 characters and contain only letters, numbers, and underscores';
        }
    }

    function validateFullname() {
        const fullname = this.value;
        const isValid = fullname.length >= 2 && /^[a-zA-Z\s]+$/.test(fullname);
        
        if (fullname.length === 0) {
            this.classList.remove('is-valid', 'is-invalid');
            return;
        }
        
        if (isValid) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            this.nextElementSibling.nextElementSibling.textContent = 'Full name looks good!';
        } else {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
            this.nextElementSibling.textContent = 'Full name must contain only letters and spaces';
        }
    }

    function validateForm() {
        const username = document.getElementById('username').value;
        const fullname = document.getElementById('fullname').value;
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmpassword').value;
        
        let isValid = true;
        
        if (username.length < 3) {
            showError('Username must be at least 3 characters long');
            isValid = false;
        }
        
        if (fullname.length < 2) {
            showError('Full name must be at least 2 characters long');
            isValid = false;
        }
        
        if (password.length < 6) {
            showError('Password must be at least 6 characters long');
            isValid = false;
        }
        
        if (password !== confirmPassword) {
            showError('Passwords do not match');
            isValid = false;
        }
        
        return isValid;
    }

    function showError(message) {
        // Create or update error message
        let errorDiv = document.querySelector('.error-list');
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-list';
            errorDiv.innerHTML = '<ul></ul>';
            form.insertBefore(errorDiv, form.firstChild);
        }
        
        const errorList = errorDiv.querySelector('ul');
        errorList.innerHTML = `<li>${message}</li>`;
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            errorDiv.remove();
        }, 5000);
    }

    function showLoading() {
        const submitBtn = form.querySelector('button[type="submit"]');
        const spinner = submitBtn.querySelector('.loading-spinner');
        const icon = submitBtn.querySelector('.fas.fa-user-plus');
        
        spinner.style.display = 'inline-block';
        icon.style.display = 'none';
        submitBtn.disabled = true;
        submitBtn.innerHTML = submitBtn.innerHTML.replace('Create Account', 'Creating Account...');
    }

    // Add floating animation to card on mouse move
    const card = document.querySelector('.register-card');
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
</script>

<?php include 'app/views/shares/footer.php'; ?>