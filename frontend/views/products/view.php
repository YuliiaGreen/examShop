<?php

use yii\helpers\Html;

/*@var $categories -tree categories*/
/*@var $model- product*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-4.1.2/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/css/product.css">
    <link rel="stylesheet" type="text/css" href="/css/product_responsive.css">

    <!-- Home -->

    <div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title"><?= $model->title ?></div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                    <?php if ($categories): ?>

                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?= Yii::$app->homeUrl ?>categories/view?id=<?= $category->id ?>"><?= $category->title ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        </li>
                    <?php endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="alert alert-success" role="alert">-->
    <!--        --><?php //echo Yii::$app->session->getFlash('success'); ?>
    <!--    </div>-->
    <!-- Product -->

    <div class="product">
        <div class="container">
            <div class="row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="product_image_slider_container">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--									<li>-->
                                <!--										<img src="/images/product_image_1.jpg" />-->
                                <!--									</li>-->
                                <!--								</ul>-->
                        </div>
                        <div class="carousel_container">
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div><img src="/images/product_1.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_2.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_3.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_4.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_5.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_6.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_7.jpg"/></div>
                                    </li>
                                    <li>
                                        <div><img src="/images/product_8.jpg"/></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i>
                            </div>
                            <div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6 product_col">
                    <div class="product_info">
                        <div class="product_name"><?= $model->title ?></div>
                        <!--							<div class="product_category">In <a href="category.html">-->
                        <? //=$model->categories()?><!--</a></div>-->
                        <!--							-->
                        <div class="product_price"><span><?= $model->price ?></span></div>
                        <div class="product_size">

                            <div class="product_text">
                                <p><?= $model->body ?></p>
                            </div>
                            <div class="product_buttons">
                                <div class="text-right d-flex flex-row align-items-start justify-content-start">

                                    <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center addProd">
                                        <div class="addProdToCart">
                                            <!--                                                <a href="http://examshop.diplom.com/cart/add-product?id=3" style="display: block">-->
                                            <div>
                                                <!--                                                        --><? //= Html::a(Html::img('/images/heart_2.svg', ['alt'=>'buy']), ['cart/add-product'
                                                ////                                                            ,'id'=>$model->id
                                                //                                                        ]);?>

                                                <img src="/images/heart_2.svg" class="svg" alt="">
                                                <div>+</div>

                                            </div>
                                            <!--                                                </a>-->
                                        </div>
                                    </div>


                                    <div class="addProdToCart product_button product_cart text-center d-flex flex-column align-items-center justify-content-centerproduct_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div>
                                            <div>
                                                <img src="/images/cart.svg" class="svg" alt="">
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Boxes -->

        <div class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box d-flex flex-row align-items-center justify-content-start">
                            <div class="mt-auto">
                                <div class="box_image"><img src="/images/boxes_1.png" alt=""></div>
                            </div>
                            <div class="box_content">
                                <div class="box_title">Size Guide</div>
                                <div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 box_col">
                        <div class="box d-flex flex-row align-items-center justify-content-start">
                            <div class="mt-auto">
                                <div class="box_image"><img src="/images/boxes_2.png" alt=""></div>
                            </div>
                            <div class="box_content">
                                <div class="box_title">Shipping</div>
                                <div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                //window.onload=function() {
                //    $('.addProdToCart').on('click', function (ev) {
                //        ev.preventDefault();
                //        $.get('/cart/add-product?id=<?//=$model->id?>//', function (msg) {
                //
                //           console.log(msg); // if (msg.status === 'error') {
                //            //     $('.ajax-response').html('Product can not be added to the cart');
                //            // } else {
                //            //     $('.ajax-response').html('Product added to the cart');
                //            // }
                //        })
                //    })
                //}
                //</script>
        </div>
    </div>


