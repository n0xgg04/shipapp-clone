<nav class="navbar navbar-expand-lg" x-data="{ currentPage: window.location.pathname }">
    <div class="container">
        <a class="navbar-brand" href="/" @click.prevent="window.location.href='/'">
            <img src="/assets/images/logo.png" alt="GHN" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" :class="{ 'active': currentPage === '/' }" href="/" @click.prevent="window.location.href='/'">TRANG CHỦ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">DỊCH VỤ</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/fast" @click.prevent="window.location.href='/services/fast'">Chuyển phát nhanh</a></li>
                        <li><a class="dropdown-item" href="/services/saving" @click.prevent="window.location.href='/services/saving'">Chuyển phát tiết kiệm</a></li>
                        <li><a class="dropdown-item" href="/services/super" @click.prevent="window.location.href='/services/super'">Chuyển phát hỏa tốc</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" :class="{ 'active': currentPage.startsWith('/about') }" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">GIỚI THIỆU</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/about" @click.prevent="window.location.href='/about'">Về chúng tôi</a></li>
                        <li><a class="dropdown-item" href="/about/vision" @click.prevent="window.location.href='/about/vision'">Tầm nhìn & Sứ mệnh</a></li>
                        <li><a class="dropdown-item" href="/about/history" @click.prevent="window.location.href='/about/history'">Lịch sử phát triển</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRA CỨU</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/tracking" @click.prevent="window.location.href='/tracking'">Tra cứu vận đơn</a></li>
                        <li><a class="dropdown-item" href="/post-offices" @click.prevent="window.location.href='/post-offices'">Tra cứu bưu cục</a></li>
                        <li><a class="dropdown-item" href="/price" @click.prevent="window.location.href='/price'">Tra cứu bảng giá</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :class="{ 'active': currentPage === '/news' }" href="/news" @click.prevent="window.location.href='/news'">THÔNG TIN</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="search-box me-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập mã đơn hàng bạn cần tra cứu...">
                        <button class="btn btn-search" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <a href="/login" @click.prevent="window.location.href='/login'" class="btn btn-primary">ĐĂNG KÝ/ ĐĂNG NHẬP</a>
            </div>
        </div>
    </div>
</nav> 