<?php

$conn = mysqli_connect("localhost", "root", "@Shion1210", "php_project")
    or die("Couldn't connect to database");


function template_navbar() {
    echo <<<EOT
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img src="assests/imgs/logo.png" alt="">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php"> <strong>Shop</strong></a>
                    </li>

                    

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"> <strong>Contact Us</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                        <a href="account.php"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    EOT;
    };
    
function template_footer() {
    echo <<<EOT
    <footer class="mt-5 py-5">
        <div class="row container row mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="/assests/imgs/logo.png">
                <p class="pt-3">We provide the best product fo the most affrodable prices</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase">
                    <li> <a href="#">men</a></li>
                    <li> <a href="#">women</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Adress</h6>
                    <p>Hannover</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>015752420716</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>josepheid32@hotmail.com</p>
                </div>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-ms-12">
                <h5 class="pb-2">Social</h5>
                <div class="row">
                    <a href="https://www.facebook.com/joseph.alid"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/josephaleid/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>
        </div>

        </div>
    </footer>
    EOT;
    }
?>

