<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background: linear-gradient(135deg, #007bff, #00d4ff);
            padding: 1rem 2rem;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-link {
            color: #fff !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #e9ecef !important;
        }
        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item {
            color: #007bff;
            transition: background-color 0.3s ease;
        }
        .dropdown-item:hover {
            background-color: #e9ecef;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Quản lý sản phẩm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/lab02/Product/">Danh sách sản phẩm <i class="fas fa-list"></i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/lab02/Product/add">Thêm sản phẩm <i class="fas fa-plus"></i></a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh Mục <i class="fas fa-folder"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/lab02/Category/">Danh sách danh mục</a></li>
                            <li><a class="dropdown-item" href="/lab02/Category/add">Thêm danh mục</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/lab02/Category/">Danh sách danh mục <i class="fas fa-list"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <?php echo $content ?? ''; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>