<?php 
    session_start();

?> 
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="View/public/css/detail.css">
    <script defer src="View/public/javascript/detail.js"></script>
</head>

<body>

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
            <?php else : ?>
                <li><a href="index.php?controller=home&action=login">Đăng Nhập</a></li>
                <li><a href="index.php?controller=user&action=register">Đăng kí</a></li>
            <?php endif; ?>
        </ul>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="View/public/image/products/<?php echo $product['image'] ?>" alt="" style="width: 100%;">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <h3 class="product-name"><?php echo $product['product_name'] ?></h3>
                        <p class="price"><?php echo $product['product_price'] ?>đ</p>
                    </div>
                </div>
                <div class="row">
                    <p class="size">Kích thước</p>
                </div>
                <div class="row">
                    <ul id="list-size-price">
                        <li class="active"><a href="">Lớn</a></li>
                        <li><a href="">vừa</a></li>
                        <li><a href="">Nhỏ</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="oder-add">
                        <p class="oder-title">Topping </p>
                        <button class="oder-btn">Đào ngâm +10000đ</button>
                    </div>
                </div>
                <div class="row">
                    <button class="ship-home-btn">Đặt giao tận nơi</button>
                </div>
                <div class="row">
                    <div class="place-buy">
                        <p class="buy-store">
                            <i class="fas fa-store"></i>
                            Mua tại cửa hàng
                        </p>
                        <p class="buy-take-away">
                            <i class="fas fa-mobile-alt"></i>
                            Mua mang đi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="info-left__heading">Thông tin</h3>
                <p class="info-left__desc">
                <?php echo $product['description'] ?>
                </p>
            </div>
            <div class="col-lg-6">
                <h3 class="story-heading">Câu chuyện</h3>
                <p class="story-detail">Trà đào cam sả - Thức uống nhất định phải thử 1 lần khi đến The Coffee House
                    Có thể bạn chưa biết, Trà Đào Cam Sả chính là một trong những món đồ uống được rất nhiều thực khách
                    gọi mỗi khi ghé thăm The Coffee House.
                    Hương vị tuy quen mà lạ, tuy lạ mà quen
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h3>Sản phẩm liên quan</h3>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="cart">
                    <img src="View/public/image/products/hat-sen1.jpg" alt="" class="cart__img">
                    <p class="cart__name">Trà Đào Cam Sả Đá</p>
                    <p class="cart__price">45.000 đ</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="cart">
                    <img src="View/public/image/products/hat-sen1.jpg" alt="" class="cart__img">
                    <p class="cart__name">Trà Đào Cam Sả Đá</p>
                    <p class="cart__price">45.000 đ</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="cart">
                    <img src="View/public/image/products/hat-sen1.jpg" alt="" class="cart__img">
                    <p class="cart__name">Trà Đào Cam Sả Đá</p>
                    <p class="cart__price">45.000 đ</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="cart">
                    <img src="View/public/image/products/hat-sen1.jpg" alt="" class="cart__img">
                    <p class="cart__name">Trà Đào Cam Sả Đá</p>
                    <p class="cart__price">45.000 đ</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="cart">
                    <img src="View/public/image/products/hat-sen1.jpg" alt="" class="cart__img">
                    <p class="cart__name">Trà Đào Cam Sả Đá</p>
                    <p class="cart__price">45.000 đ</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="cart">
                    <img src="View/public/image/products/hat-sen1.jpg" alt="" class="cart__img">
                    <p class="cart__name">Trà Đào Cam Sả Đá</p>
                    <p class="cart__price">45.000 đ</p>
                </div>
            </div>
        </div>
    </div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul>
                        <li><a href="#">
                                <h5>Giới thiệu</h5>
                            </a></li>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Chuyện cà phê</a></li>
                        <li><a href="#">Cửa Hàng</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <li><a href="#">Điều khoản</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Quy tắc bảo mật</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <li><a href="">Đặt hàng: 1800 6936</a></li>
                        <li><a href="">
                                Liên hệ
                            </a></li>
                        <li><a href="">Tầng 3-4 Hub Building
                                195/10E Điện Biên Phủ, P.15 ,
                                Q.Bình Thạnh, TP.Hồ Chí Minh</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <img src="View/public/image/fb.jpg" alt="" class="footer_facebook" style="height: 200px; width: 100%;">
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>