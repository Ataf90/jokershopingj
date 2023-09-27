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

    <!---Cart-->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>
        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assests/imgs/chanel2.jpg">
                        <div>
                            <p>CHANELJ12 BLACK CLASSIC </p>
                            <small><span>$</span>155</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                    <a class="edit-btn">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">1555</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assests/imgs/gucci2.jpg">
                        <div>
                            <p>CHANELJ12 BLACK CLASSIC </p>
                            <small><span>$</span>155</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                    <a class="edit-btn">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">1555</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assests/imgs/tag2.jpg">
                        <div>
                            <p>CHANELJ12 BLACK CLASSIC </p>
                            <small><span>$</span>155</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                    <a class="edit-btn">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">1555</span>
                </td>
            </tr>
        </table>
        <div>
            <div class="cart-total">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$1555</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$</td>
                    </tr>
                </table>
            </div>
            <div class="checkout-container">
                <a href="/checkout.php">
                    <button class="btn checkout-btn">Checkout</button>
                </a>
            </div>

    </section>


    <!--footer-->
    <?=template_footer()?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>