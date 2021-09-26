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
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap">
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="nav__top">
            <div class="container">
                <div class="header_container">
                    <div class="navbar__logo">
                        <a href="">
                            <img src="img/logo.png" alt="" class="navbar__img">
                        </a>
                    </div>
                    <!-- menu-bars -->
                    <label for="nav_menu-bar" class="menu_bar-item">
                        <i class="menu_bar-icon fas fa-bars"></i>
                    </label>
                    <input type="checkbox" name="" hidden class="nav_show" id="nav_menu-bar">
                    <!-- end- -->
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
    <!-- End Header -->
    <!-- Slider -->

    <div class="slider">
        <!-- FOODS -->
        <div class="slider__foodmenu">
            <div class="slider__foodmenu-bcl">
                <h3 class="slider__heading">Food Menu</h3>
                <div class="container">
                    <div class="row">
                        <!-- row1 -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="img/menu-momo.jpg" alt="" class="foodmenu-img">
                                    </div>

                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Dumplings Specials</h4>
                                        <span class="slider__foodmenu-price">$5.00</span>
                                        <p class="slider__foodmenu-text">Chicken Dumpling wuth herbs from Mountains
                                        </p>
                                        <a href="order_momo.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row1 -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3  ">
                                    <div class="menu_img">
                                        <img src="img/menu-burger.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Best Burger</h4>
                                        <span class="slider__foodmenu-price">$4.0</span>
                                        <p class="slider__foodmenu-text">Burger with Ham, Pineapple and lots of Cheese.
                                        </p>
                                        <a href="order_burger.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- row2 -->

                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="img/menu-momo.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Sadeko Momo</h4>
                                        <span class="slider__foodmenu-price">$6.00</span>
                                        <p class="slider__foodmenu-text">Best Spicy Momo for Winter
                                        </p>
                                        <a href="order_momo.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="img/menu-pizza.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Mixed Pizza </h4>
                                        <span class="slider__foodmenu-price">$10.00</span>
                                        <p class="slider__foodmenu-text">Pizza with Chicken, Ham, Buff, Mushroom and 
                                            vegetables.
                                        </p>
                                        <a href="order_pizza.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <!-- row3 -->

                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="slider__foodmenu-block">
                                <div class="col-lg-3 col-md-3 col-3 ">
                                    <div class="menu_img">
                                        <img src="img/menu-pizza.jpg" alt="" class="foodmenu-img">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="slider__foodmenu-right">
                                        <h4 class="slider__foodmenu-title">Smoky BBQ Pizza</h4>
                                        <span class="slider__foodmenu-price">$6.00</span>
                                        <p class="slider__foodmenu-text">Best Firewood Pizza in Town.
                                        </p>
                                        <a href="order_pizza.php">
                                            <button class="slider__foodmenu-btn">Order Now</button>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        
                    </div>

                    <h4 class="slider__foodmenu-footer">See All Foods</h4>
                </div>
            </div>
        </div>
        <!-- ------------------------------------------------------------------ -->
    </div>
        <!-- ------------------------------------------------------------------ -->
    </div>
    <!-- End Slider -->
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