<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FOODS</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">
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
                    <label for="nav_menu-bar" class="menu_bar-item">
                        <i class="menu_bar-icon fas fa-bars"></i>
                    </label>
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

    </div>
    <!-- end header -->
    <!-- Slider -->
    <div class="slider__order">
        <h3 class="slider__order-heading">Fill this from to confirm your order.</h3>
        <div class="container order">
            <div class="slider__order-selected">
                <h5 class="selected-heading">Selected Food</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <div class="selected__left">
                            <img src="img/menu-pizza.jpg" alt="" class="selected-img">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9">
                        <div class="selected__right">
                            <h4 class="selected__right-title">Food Title</h4>
                            <span class="selected__right-price">$2.3</span>
                            <span class="selected__right-quantity">Quantity</span>
                            <input type="number" name="" required id="" placeholder="1" class="quantity-input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__order-delivery">
                <h5 class="delivery-heading">Delivery Details</h5>
                <form action class="deliverydetails">
                    <span class="delivery__title">Full Name</span>
                    <input type="text" name="" required id="" placeholder="E.g. DoTienAnh" class="delivery-input">
                    <span class="delivery__title">Phone Number</span>
                    <input type="number" name="" required id="" placeholder="E.g. 0828xxxxx" class="delivery-input">
                    <span class="delivery__title">Email</span>
                    <input type="email" name="" required id="" placeholder="E.g. DoTienAnh@gmail.com"
                        class="delivery-input">
                    <span class="delivery__title">Address</span>
                    <textarea name="" id="" cols="30" rows="10" name="" required id=""
                        placeholder="E.g. Street, City, Country" class="delivery-input"></textarea>
                    <div>
                        <input type="submit" value="Confirm Order" class="confirm-btn">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- end slider -->
    <!-- footer -->
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
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>