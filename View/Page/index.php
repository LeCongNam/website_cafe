<?php
    session_start();
    if (isset($_SESSION['user_name'])) {
        // echo $_SESSION['user_name'];
        // echo $_COOKIE['user_name'];
    }

?>

<!doctype html>
<html lang="en">

<head>
    <title>HomePage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="//theme.hstatic.net/1000075078/1000803849/14/favicon.png?v=433" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="View/public/css/main.css">
</head>

<body>
    <?php 
        require_once 'View/include/header.php';
    
    ?> 

    <div id="banner">
        <a href="#"><img src="View/public/image/banner.jpeg" alt="" class="banner__img"></a>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <a href="#"> <img src="View/public/image/products/sale1.jpeg" alt="" class="sale"></a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <!-- show product -->
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="col-lg-6">
                            <div class="cart">
                                <a href="index.php?controller=home&action=details&id=<?php echo $products[$i]['product_id'] ?>">
                                    <img src="View/public/image/products/<?php echo $products[$i]['image'] ?>" alt="<?php echo $products[$i]['product_name'] ?>" class="cart__img">
                                </a>
                                <p class="cart__name"><a href="#"><?php echo $products[$i]['product_name'] ?></a></p>
                                <p class="cart__price"><?php echo $products[$i]['product_price'] ?>đ</p>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <!-- show product 2-5 -->
            <?php for ($i = 2; $i < count($products); $i++) : ?>
                <div class="col-lg-3">
                    <div class="cart">
                        <a href="index.php?controller=home&action=details&id=<?php echo $products[$i]['product_id'] ?>">
                            <img src="View/public/image/products/<?php echo $products[$i]['image'] ?>" alt="<?php echo $products[$i]['product_name'] ?>" class="cart__img">
                        </a>
                        <p class="cart__name">
                            <a href="index.php?controller=home&action=details&id=<?php echo $products[$i]['product_id'] ?>">
                                <?php echo $products[$i]['product_name'] ?>
                            </a>
                        </p>
                        <p class="cart__price"><?php echo $products[$i]['product_price'] ?>đ</p>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>

    <div class="combo">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="combo__left">
                        <h2 class="combo__left--heading">Combo Quà Tết 2022</h2>
                        <p class="combo__left--desc">
                            Combo quà Tết 2022: Hộp quà tặng với 4 hộp trà túi lọc Tearoma, Hộp cà phê sữa đá,
                            Hộp cà phê 3in1 đậm vị Việt và Cà phê Original 1 của The Coffee House với thành phần chính
                            cà phê Robusta Đắk Lắk,
                            vùng trồng cà phê nổi tiếng nhất Việt Nam. Bằng cách áp dụng kỹ thuật rang xay hiện đại.
                        </p>
                    </div>
                    <a href="#" class="btn-large">Tìm hiểu thêm</a>
                </div>
                <div class="col-lg-8">
                    <a href="#"><img src="View/public/image/combo/combo1.png" alt="" class="combo__img"></a>
                </div>
            </div>
        </div>
    </div>


    <!-- hobbies -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-lg-center">
                <h1>Chuyện Cà phê và Trà</h1>
            </div>
        </div>
        <div class="row">
            <div class="hobby">
                <div class="harizon mr-2"></div>
                <h3 class="hobby__heading">
                    Coffeeholic
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="cart">
                    <a href="#"><img src="View/public/image/hobby/hobby1.webp" alt="" class="cart__img"></a>
                    <p class="cart__name"><a href="#">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁCH</a></p>
                    <p class="cart__price">Espresso, một cái tên khá hay mà chắc hẳn bạn đã từng nghe qua. Vậy chính xác
                        Espresso là gì, nó có bao nhiêu loại và làm sao để phân...</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="cart">
                    <a href="#"><img src="View/public/image/hobby/hobby1.webp" alt="" class="cart__img"></a>
                    <p class="cart__name"><a href="#">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁCH</a></p>
                    <p class="cart__price">Espresso, một cái tên khá hay mà chắc hẳn bạn đã từng nghe qua. Vậy chính xác
                        Espresso là gì, nó có bao nhiêu loại và làm sao để phân...</p>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="cart">
                    <a href="#"><img src="View/public/image/hobby/hobby1.webp" alt="" class="cart__img"></a>
                    <p class="cart__name"><a href="#">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁCH</a></p>
                    <p class="cart__price">Espresso, một cái tên khá hay mà chắc hẳn bạn đã từng nghe qua. Vậy chính xác
                        Espresso là gì, nó có bao nhiêu loại và làm sao để phân...</p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        require_once 'View/include/footer.php';
    
    ?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>