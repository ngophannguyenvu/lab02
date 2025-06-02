<?php include 'app/views/shares/header.php'; ?>
<style>
.gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #2575fc, #6a11cb);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #2575fc, #6a11cb);
}

.card-custom {
    background: rgba(0, 0, 0, 0.6);
    border-radius: 1rem;
    color: white;
    backdrop-filter: blur(10px);
}

.form-control {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid #ccc;
    color: white;
}

.form-control:focus {
    background-color: rgba(255, 255, 255, 0.2);
    border-color: #fff;
    color: white;
    box-shadow: none;
}

a.text-white:hover {
    color: #ddd;
    text-decoration: none;
}
</style>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card card-custom p-4">
          <div class="card-body text-center">
            <form action="/lab02/account/checklogin" method="post">
              <h2 class="fw-bold mb-4 text-uppercase">Đăng nhập</h2>
              <p class="text-white-50 mb-4">Vui lòng nhập tên người dùng và mật khẩu!</p>

              <div class="form-outline form-white mb-4 text-left">
                <label class="form-label" for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" class="form-control form-control-lg" required />
              </div>

              <div class="form-outline form-white mb-4 text-left">
                <label class="form-label" for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" required />
              </div>

              <div class="mb-4">
                <a class="text-white-50 small" href="#!">Quên mật khẩu?</a>
              </div>

              <button class="btn btn-outline-light btn-lg w-100 mb-3" type="submit">Đăng nhập</button>

              <div class="d-flex justify-content-center mt-3">
                <a href="#!" class="text-white mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#!" class="text-white mx-2"><i class="fab fa-google fa-lg"></i></a>
              </div>

              <div class="mt-4">
                <p class="mb-0">Chưa có tài khoản? <a href="/lab02/account/register" class="text-white-50 fw-bold">Đăng ký</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'app/views/shares/footer.php'; ?>
