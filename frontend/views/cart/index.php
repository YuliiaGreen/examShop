<?php

/* @var $cart frontend/controller/Cart Controller= ShoppingCart::findLastCart(); */

/* @var $quantity frontend/controller/Cart Controller */

use frontend\models\ShoppingCart;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.2/bootstrap.min.css">-->
    <!--    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <!--    <link rel="stylesheet" type="text/css" href="css/cart.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="css/cart_responsive.css">-->
</head>
<body>
<!---->
<!--<div class="super_container">-->
<!--    <div class="super_container_inner">-->
<!--        <div class="super_overlay">-->
<div class="cart_section">


    <div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title">
                    <?php if (Yii::$app->session->hasFlash('info')) {
                        echo Yii::$app->session->getFlash('info');
                    } else {
                        echo 'Shopping cart';
                    }
                    ?>
                </div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                    <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                        <li><a href="#">Home</a></li>
                        <li>Your Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cart_container">

                        <!-- Cart Bar -->
                        <div class="cart_bar">
                            <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                                <li class="mr-auto">Product</li>
                                <li>Price</li>
                                <li>Quantity</li>
                                <li>Total</li>
                            </ul>
                        </div>

                        <!-- Cart Items -->
                        <div class="cart_items">
                            <ul class="cart_items_list">

                                <!-- Cart Item -->
                                <?php if (!empty($cart->products)): ?>
                                    <?php $sum = 0;
                                    foreach ($cart->products as $item):?>
                                        <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                                            <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                <div>
                                                    <div class="product_number">1</div>
                                                </div>
                                                <div>
                                                    <div class="product_image"><img src="/images/cart_item_1.jpg"
                                                                                    alt=""></div>
                                                </div>
                                                <div class="product_name_container">
                                                    <div class="product_name"><a
                                                                href="../products/view?id=<?= $item->id ?>"><?= $item->title ?></a>
                                                    </div>
                                                    <div class="product_text"><?= $item->body ?></div>
                                                </div>
                                            </div>
                                            <div class="product_price product_text">
                                                <span>Price: </span><?= $item->price ?>
                                            </div>
                                            <div class="product_quantity_container">
                                                <?= $quantity[$item->id] ?>
                                                <!--                                                -->
                                                <!--                                                <div class="product_quantity ml-lg-auto mr-lg-auto text-center">-->
                                                <!--                                                    <span class="product_text product_num"></span>-->
                                                <!--                                                    <div class="qty_sub qty_button trans_200 text-center"><span>-</span>-->
                                                <!--                                                    </div>-->
                                                <!--                                                    <div class="qty_add qty_button trans_200 text-center"><span>+</span>-->
                                                <!--                                                    </div>-->
                                                <!--                                                </div>-->
                                                <!--                                                -->
                                            </div>

                                            <div class="product_total product_text">
                                                <span>Total: </span> <?= $item->price * $quantity[$item->id] ?></div>
                                            <?php $sum += $item->price * $quantity[$item->id] ?>
                                        </li>

                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>


                        <!--//                                use yii\helpers\Html; ?>-->
                        <br>
                        <!-- Cart Buttons -->
                        <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                            <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="button button_clear trans_200">
                                    <a href="categories.html">clear cart</a>
                                </div>
                                <?= \yii\helpers\Html::a('submit', ['cart/confirm-cart'], ['class' => 'btn btn-success']) ?>
                                <div class="button button_continue trans_200"><a href="categories.html">continue
                                        shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row cart_extra_row">

                <div class="col-lg-6 cart_extra_col">
                    <div class="cart_extra cart_extra_2">
                        <div class="cart_extra_content cart_extra_total">
                            <div class="cart_extra_title">Cart Total</div>
                            <ul class="cart_extra_total_list">
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_extra_total_title">Subtotal</div>
                                    <div class="cart_extra_total_value ml-auto">
                                        <?= $sum; ?>
                                        UAH
                                    </div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_extra_total_title">Shipping</div>
                                    <div class="cart_extra_total_value ml-auto">Free</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_extra_total_title">Total</div>
                                    <div class="cart_extra_total_value ml-auto"><?= $sum ?></div>
                                </li>
                            </ul>
                            <div class="checkout_button trans_200"><a href="checkout.html">proceed to
                                    checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    </div>-->
<!--    </div>-->
<!--</div>-->


<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<!--<script src="styles/bootstrap-4.1.2/popper.js"></script>-->
<!--<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>-->
<!--<script src="plugins/greensock/TweenMax.min.js"></script>-->
<!--<script src="plugins/greensock/TimelineMax.min.js"></script>-->
<!--<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>-->
<!--<script src="plugins/greensock/animation.gsap.min.js"></script>-->
<!--<script src="plugins/greensock/ScrollToPlugin.min.js"></script>-->
<!--<script src="plugins/easing/easing.js"></script>-->
<!--<script src="plugins/parallax-js-master/parallax.min.js"></script>-->
<!--<script src="js/cart.js"></script>-->
</body>
</html>