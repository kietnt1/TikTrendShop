<header class="shadow-sm " style="height: 80px ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary h-100">
        <div class="container-fluid ">
            <a class="navbar-brand fs-4" href="#">
                <span class="fw-bold">TickTrendShop</span> | Kênh Người Bán</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                                {{ Auth::user()->full_name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="{{ route('manager.shop-detail', $store->slug) }}">Cửa hàng</a></li>
                                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
