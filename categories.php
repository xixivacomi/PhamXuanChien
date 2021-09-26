<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FOODS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="grid.css"> -->
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap">
</head>

<body>
    <div class="header">
        <div class="nav__top">
            <div class="container">
                <div class="header_container">
                    <div class="navbar__logo">
                        <a href="">
                            <img src="img/logo.png" alt="" class="navbar__img">
                        </a>
                    </div>
                    <!-- menu-bar -->
                    <label for="nav_menu-bar" class="menu_bar-item">
                        <i class="menu_bar-icon fas fa-bars"></i>
                    </label>
                    <!-- end----- -->
                    <input type="checkbox" name="" hidden class="nav_show" id="nav_menu-bar">
                    <div class="list">

                        <a href="index.php" class="list__item">
                            Home
                        </a>

                        <a href="categories.php" class="list__item">
                            Categories
                        </a>

                        <a href="foods.php" class="list__item">
                            Foods
                        </a>

                        <a href="#" class="list__item">
                            Contact
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="nav__bottom">
            <div class="container">
                <div class="nav__search">
                    <input type="text" placeholder="Tìm kiếm" class="nav__input">
                    <button class="nav__btn">
                        <i class="nav__icon fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="slider">
        <!-- CATEGORIES -->
        <div class="slider__explorefoods">
            <h3 class="slider__heading">Explore Foods</h3>
            <div class="container">
                <div class="row">
                    <!-- row1 -->
                    <div class=" col-lg-4 col-md-6 col-6">
                        <div class="slider__images-title">
                            <img src="img/pizza.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Pizza</h4>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-6">
                        <div class="slider__images-title">
                            <img src="img/burger.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Burder</h4>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-6">
                        <div class="slider__images-title">
                            <img src="img/momo.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">MoMo</h4>
                        </div>
                    </div>

                    <!-- row2 -->
                    <div class=" col-lg-4 col-md-6 col-6">
                        <div class="slider__images-title">
                            <img src="img/burger.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Burder</h4>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-6">
                        <div class="slider__images-title">
                            <img src="img/momo.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">MoMo</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="slider__images-title">
                            <img src="img/pizza.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Pizza</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------------------- -->
        
    </div>
    <!-- FOOTER -->
    <div class="footer">
        <div class="footer__item">
            <a href="https://vi-vn.facebook.com/">
                <i class="footer__item-icon fab fa-facebook"></i>
            </a>
            <a href="">
                <i class="footer__item-icon2 fab fa-instagram"></i>
            </a>
            <a href="">
                <i class="footer__item-icon fab fa-twitter"></i>
            </a>

        </div>
        <div class="footer__text">
            <span>
                All rights reserved. Designed By&nbsp

            </span>

            <span class="footer__name-dev"> Pham Xuan Chien</span>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>