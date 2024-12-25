<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bán hàng | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .highlight {
            background-color: lightblue !important;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Quản lý bán hàng</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" id="dashboard-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}" id="products-link">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index')}}" id="customers-link">Khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('order.index')}}" id="orders-link">Đơn hàng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Dashboard Content -->
<div class="container mt-4">
    <div class="row">
        <!-- Stats Cards -->
        <div class="col-md-4">
            <div class="card highlight-card" id="customers-card">
                <div class="card-body text-center">
                    <h5 class="card-title">Customers</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card highlight-card" id="products-card">
                <div class="card-body text-center">
                    <h5 class="card-title">Products</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card highlight-card" id="orders-card">
                <div class="card-body text-center">
                    <h5 class="card-title">Orders</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    @yield('content')
</div>
<footer class="text-center mt-4 py-4 bg-light">
    <p>&copy; {{ date('Y') }} Quản lý cửa hàng.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const links = document.querySelectorAll('.nav-link');
    const highlightCards = document.querySelectorAll('.highlight-card');

    // Kiểm tra trạng thái từ localStorage
    const activeSection = localStorage.getItem('activeSection');
    if (activeSection) {
        highlightCards.forEach(card => card.classList.remove('highlight'));
        document.getElementById(activeSection).classList.add('highlight');
    }

    links.forEach(link => {
        link.addEventListener('click', function () {
            // Xóa highlight trên tất cả các card
            highlightCards.forEach(card => card.classList.remove('highlight'));

            // Thêm highlight vào card tương ứng
            const sectionId = link.id.replace('-link', '-card');
            document.getElementById(sectionId).classList.add('highlight');

            // Lưu trạng thái vào localStorage
            localStorage.setItem('activeSection', sectionId);
        });
    });
</script>
</body>
</html>
