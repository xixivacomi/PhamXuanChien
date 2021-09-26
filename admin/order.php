<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap">
</head>

<body>
    <!-- header -->
    <div class="header">
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
                    <a href="admin.php" class="list__item">
                        Admin
                    </a>
                    <a href="category.php" class="list__item">
                        Category
                    </a>

                    <a href="food.php" class="list__item">
                        Food
                    </a>

                    <a href="order.php" class="list__item">
                        Order
                    </a>
                    <a href="#" class="list__item">
                        Logout
                    </a>
                </div>

            </div>
        </div>


    </div>
    <!-- End header -->
    <!-- Slider -->
    <div class="main">
        <div class="container">
            <h4 class="main__title">Manage Order</h4>

            <div class="table-responsive-lg table-responsive-sm">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class=" border_right">S.N</th>
                            <th scope="col" class=" border_right">Food</th>

                            <th scope="col" class=" border_right">Price</th>
                            <th scope="col" class=" border_right">Qty</th>
                            <th scope="col" class=" border_right">Total</th>
                            <th scope="col" class=" border_right">Order Date</th>
                            <th scope="col" class=" border_right">Status</th>
                            <th scope="col" class=" border_right">Customer Name</th>
                            <th scope="col" class=" border_right">Contact</th>
                            <th scope="col" class=" border_right">Email</th>
                            <th scope="col" class=" border_right">Address</th>
                            <th scope="col" class=" border_right">Actions</th>



                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Mixed Pizza</td>
                            <td>$5.00</td>
                            <td>2</td>

                            <td>20.00</td>
                            <td>
                                2020-11-30 04:07:17
                            </td>
                            <td class="text-success">Delivered</td>

                            <td>Jana Bush</td>
                            <td>+1(562) 101-2028</td>
                            <td>tyty@gmail.com</td>
                            <td>Hà Nội</td>
                            <td>

                                <button class="btn color_update">Update Order</button>

                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Best Burger</td>
                            <td>$5.00</td>
                            <td>4</td>

                            <td>20.00</td>
                            <td>
                                2020-11-30
                                04:07:17
                            </td>
                            <td class="text-success">Delivered</td>

                            <td>Jana Bush</td>
                            <td>+1(562)
                                101-2028</td>
                            <td>tyty@gmail.com</td>
                            <td>Hà Nội</td>
                            <td>

                                <button class="btn color_update">Update Order</button>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Sadeko Momo</td>
                            <td>$5.00</td>
                            <td>3</td>

                            <td>20.00</td>
                            <td>
                                2020-11-30
                                04:07:17
                            </td>
                            <td class="text-danger">Cancelled</td>

                            <td>Jana Bush</td>
                            <td>+1(562)
                                101-2028</td>
                            <td>tyty@gmail.com</td>
                            <td>Hà Nội</td>
                            <td>

                                <button class="btn color_update">Update Order</button>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
    <!-- End Slider -->
    <!-- FOOTER -->
    <div class="footer">
        <div class="footer__text">
            <span>
                2021 All rights reserved. Food House. Designed By&nbsp
            </span>

            <span class="footer__name-dev"> Pham Xuan Chien</span>

        </div>
    </div>
    <!-- End footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>