
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header__meta-list">
                    <!-- Meta Item -->
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="meta-item__desc">146 Cửa hàng khắp cả nước</p>
                    </div>
                    <!-- End Meta Item -->

                    <!-- Meta Item -->
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <p class="meta-item__desc">Đặt hàng: 1800.6936 </p>
                    </div>
                    <!-- End Meta Item -->
                    <!-- Meta Item -->
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="meta-item__desc">Freeship từ 50.000vnd</p>
                    </div>
                    <!-- End Meta Item -->
                </div>
            </div>
        </div>
    </div>

    <div id="menu">
        <a href="index.php">
            <img src="View/public/image/logo.png" alt="" class="logo">
        </a>
        <ul id="nav">
            <li><a href="#">Cà phê</a></li>
            <li><a href="#">Trà</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Chuyện Cà phê và Trà</a></li>
            <li><a href="#">Cửa Hàng</a></li>
            <?php if (isset($_SESSION['user_name'])) : ?>
                <li><a href="#"><?php echo $_SESSION['user_name'];  ?> </a></li>
                <li><a href="index.php?controller=user&action=logout">Logout</a></li>
            <?php else : ?>
                <li><a href="index.php?controller=home&action=login">Đăng Nhập</a></li>
                <li><a href="index.php?controller=user&action=register">Đăng kí</a></li>
            <?php endif; ?>
        </ul>
    </div>
