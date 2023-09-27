<?php include('server/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assests/css/style.css">
</head>

<body>

    <!--navbar-->
    <?=template_navbar()?>

    <!--Home-->
    <section id="home">
        <div class="container">
            <h5> <strong> NEW ARRIVALS</strong></h5>
            <h1> <span>Best Prices</span> This Season</h1>
            <p> <strong> Crown offres the bes product for the most for affrodable prices</strong></p>
            <a href="shop.php"><button>Shop Now</button></a>
        </div>
    </section>
    <!--Brand-->
    <section id="brand" class="container">
        <div class="row m-0">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="/assests/imgs/brand1.jpeg">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="/assests/imgs/brand2.jpg">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="/assests/imgs/brand3.jpeg">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="/assests/imgs/brand4.png">


        </div>
    </section>
    <!--New-->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!--One-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="/assests/imgs/featured1.jpg">
                <div class="details">
                    <h2>GUCCI SILVER CLASSIC</h2>
                    <a href="shop.php"><button class="text-uppercase">Shop Now</button></a>
                </div>
            </div>
            <!--Two-->

            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assests/imgs/featured2.jpg">
                <div class="details">
                    <h2>TISSOT DIVE BROWN MEDIUM</h2>
                    <a href="shop.php"><button class="text-uppercase">Shop Now</button></a>
                </div>
            </div>
            <!--Three-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assests/imgs/featured3.jpg">
                <div class="details">
                    <h2>TAG TIGER GREEN </h2>
                    <a href="shop.php"><button class="text-uppercase">Shop Now</button></a>
                </div>
            </div>
        </div>
    </section>

    <!--Featured-->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">
            <?php
            include('server/get_featured_products.php'); ?>
            <?php while ($row = $featured_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assests/imgs/<?php echo $row['product_image']; ?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">
                        <?php echo $row['product_name']; ?>
                    </h5>
                    <h4 class="p-price">$
                        <?php echo $row['product_price']; ?>
                    </h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>">
                        <button class="buy-btn">BuyNow</button></a>
                </div>


            <?php } ?>
        </div>
    </section>
    <!--Banner-->
    <section id="banner" class="my-5 pb-5">
        <div class="container">
            <h4>MID Season's Sale</h4>
            <h1>Collection <br> UP to 30% OFF</h1>
            <button class="text-uppercase">Shop now</button>
        </div>

    </section>
    <!--footer-->
    <?=template_footer()?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>