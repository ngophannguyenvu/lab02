<?php include 'app/views/shares/header.php'; ?>

<!-- Custom CSS cho giỏ hàng -->
<style>
.cart-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 40px 0;
    margin-bottom: 30px;
}

.cart-item {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    margin-bottom: 20px;
    transition: all 0.3s ease;
    overflow: hidden;
}

.cart-item:hover {
    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    transform: translateY(-2px);
}

.product-image {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
}

.quantity-controls {
    display: flex;
    align-items: center;
    gap: 10px;
}

.quantity-btn {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 2px solid #3498db;
    background: white;
    color: #3498db;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.quantity-btn:hover {
    background: #3498db;
    color: white;
}

.quantity-input {
    width: 60px;
    text-align: center;
    border: 2px solid #ecf0f1;
    border-radius: 8px;
    padding: 8px;
}

.price-display {
    font-size: 1.3rem;
    font-weight: bold;
    color: #e74c3c;
}

.total-section {
    background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
    color: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 6px 20px rgba(46, 204, 113, 0.3);
}

.btn-checkout {
    background: linear-gradient(45deg, #f39c12, #e67e22);
    border: none;
    border-radius: 25px;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-checkout:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(243, 156, 18, 0.4);
}

.btn-continue {
    background: linear-gradient(45deg, #3498db, #2980b9);
    border: none;
    border-radius: 25px;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-continue:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
}

.empty-cart {
    text-align: center;
    padding: 60px 20px;
    background: #f8f9fa;
    border-radius: 15px;
    margin: 30px 0;
}

.remove-btn {
    background: #e74c3c;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.remove-btn:hover {
    background: #c0392b;
    transform: scale(1.1);
}

.cart-summary {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    padding: 25px;
    position: sticky;
    top: 20px;
}
</style>

<!-- Hero Section -->
<div class="cart-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold mb-2">
                    <i class="fas fa-shopping-cart me-3"></i>Giỏ Hàng Của Bạn
                </h1>
                <p class="lead mb-0">Xem lại các sản phẩm bạn đã chọn</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-mobile-alt" style="font-size: 4rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <?php if (!empty($cart)): ?>
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0">
                        <i class="fas fa-list me-2 text-primary"></i>
                        Sản phẩm trong giỏ (<?php echo count($cart); ?>)
                    </h3>
                    <button class="btn btn-outline-danger btn-sm" onclick="clearCart()">
                        <i class="fas fa-trash me-1"></i>Xóa tất cả
                    </button>
                </div>

                <?php 
                $total = 0;
                foreach ($cart as $id => $item): 
                    $itemTotal = $item['price'] * $item['quantity'];
                    $total += $itemTotal;
                ?>
                <div class="card cart-item">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <!-- Product Image -->
                            <div class="col-md-2 col-sm-3 text-center mb-3 mb-md-0">
                                <?php if ($item['image']): ?>
                                    <img src="/lab02/<?php echo $item['image']; ?>" 
                                         alt="<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>" 
                                         class="product-image">
                                <?php else: ?>
                                    <div class="product-image bg-light d-flex align-items-center justify-content-center">
                                        <i class="fas fa-mobile-alt text-muted" style="font-size: 2rem;"></i>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Product Info -->
                            <div class="col-md-4 col-sm-9 mb-3 mb-md-0">
                                <h5 class="fw-bold text-dark mb-2">
                                    <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </h5>
                                <p class="text-muted mb-1">
                                    <i class="fas fa-tag me-1"></i>
                                    Đơn giá: <?php echo number_format($item['price'], 0, ',', '.'); ?> ₫
                                </p>
                            </div>

                            <!-- Quantity Controls -->
                            <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                                <label class="form-label fw-semibold">Số lượng:</label>
                                <div class="quantity-controls">
                                    <button class="quantity-btn" onclick="updateQuantity(<?php echo $id; ?>, -1)">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" 
                                           class="form-control quantity-input" 
                                           value="<?php echo $item['quantity']; ?>" 
                                           min="1" 
                                           onchange="setQuantity(<?php echo $id; ?>, this.value)">
                                    <button class="quantity-btn" onclick="updateQuantity(<?php echo $id; ?>, 1)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Price & Remove -->
                            <div class="col-md-2 col-sm-6 text-end">
                                <div class="price-display mb-2">
                                    <?php echo number_format($itemTotal, 0, ',', '.'); ?> ₫
                                </div>
                                <button class="remove-btn" onclick="removeItem(<?php echo $id; ?>)" title="Xóa sản phẩm">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4">
                <div class="cart-summary">
                    <h4 class="fw-bold mb-4">
                        <i class="fas fa-calculator me-2 text-success"></i>
                        Tổng Đơn Hàng
                    </h4>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Tạm tính:</span>
                        <span class="fw-semibold"><?php echo number_format($total, 0, ',', '.'); ?> ₫</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Phí vận chuyển:</span>
                        <span class="text-success fw-semibold">Miễn phí</span>
                    </div>
                    
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-4">
                        <span class="h5 fw-bold">Tổng cộng:</span>
                        <span class="h5 fw-bold text-danger"><?php echo number_format($total, 0, ',', '.'); ?> ₫</span>
                    </div>

                    <!-- Promo Code -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Mã giảm giá:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập mã giảm giá">
                            <button class="btn btn-outline-primary" type="button">
                                <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-3">
                        <a href="/lab02/Product/checkout" class="btn btn-checkout text-white btn-lg">
                            <i class="fas fa-credit-card me-2"></i>
                            Thanh Toán Ngay
                        </a>
                        <a href="/lab02/Product" class="btn btn-continue text-white">
                            <i class="fas fa-arrow-left me-2"></i>
                            Tiếp Tục Mua Sắm
                        </a>
                    </div>

                    <!-- Security Info -->
                    <div class="mt-4 p-3 bg-light rounded">
                        <div class="d-flex align-items-center text-muted">
                            <i class="fas fa-shield-alt me-2 text-success"></i>
                            <small>Thanh toán an toàn & bảo mật</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>
        <!-- Empty Cart -->
        <div class="empty-cart">
            <i class="fas fa-shopping-cart text-muted mb-4" style="font-size: 5rem;"></i>
            <h3 class="text-muted mb-3">Giỏ hàng của bạn đang trống</h3>
            <p class="text-muted mb-4">Hãy khám phá những sản phẩm tuyệt vời của chúng tôi!</p>
            <a href="/lab02/Product" class="btn btn-continue text-white btn-lg">
                <i class="fas fa-shopping-bag me-2"></i>
                Bắt Đầu Mua Sắm
            </a>
        </div>
    <?php endif; ?>
</div>

<!-- Recommended Products Section -->
<?php if (!empty($cart)): ?>
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mb-4">
                <i class="fas fa-star me-2 text-warning"></i>
                Sản Phẩm Gợi Ý
            </h3>
            <div class="row">
                <!-- Placeholder for recommended products -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=200" class="card-img-top" alt="Recommended">
                        <div class="card-body text-center">
                            <h6 class="card-title">iPhone 15 Pro</h6>
                            <p class="text-danger fw-bold">25.990.000 ₫</p>
                            <button class="btn btn-outline-primary btn-sm">Xem chi tiết</button>
                        </div>
                    </div>
                </div>
                <!-- Repeat for more products -->
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- JavaScript for Cart Functions -->
<script>
function updateQuantity(productId, change) {
    // AJAX call to update quantity
    const currentQty = document.querySelector(`input[onchange*="${productId}"]`).value;
    const newQty = parseInt(currentQty) + change;
    
    if (newQty > 0) {
        // Make AJAX request to update quantity
        fetch(`/lab02/Product/updateCartQuantity/${productId}/${newQty}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload(); // Reload to update totals
            }
        });
    }
}

function setQuantity(productId, quantity) {
    if (quantity > 0) {
        fetch(`/lab02/Product/updateCartQuantity/${productId}/${quantity}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}

function removeItem(productId) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
        fetch(`/lab02/Product/removeFromCart/${productId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}

function clearCart() {
    if (confirm('Bạn có chắc chắn muốn xóa tất cả sản phẩm trong giỏ hàng?')) {
        fetch('/lab02/Product/clearCart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}

// Auto-save quantity changes
document.addEventListener('DOMContentLoaded', function() {
    const quantityInputs = document.querySelectorAll('.quantity-input');
    quantityInputs.forEach(input => {
        input.addEventListener('blur', function() {
            const productId = this.getAttribute('onchange').match(/\d+/)[0];
            setQuantity(productId, this.value);
        });
    });
});
</script>

<?php include 'app/views/shares/footer.php'; ?>