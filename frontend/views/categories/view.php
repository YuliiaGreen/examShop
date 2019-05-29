<link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="css/category.css">
<link rel="stylesheet" type="text/css" href="css/category_responsive.css">
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $products common\models\Categories */
//?>
<div class="categories-view">
    <div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title"><?= $model->title ?></div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                    <?= $model->body ?>
                </div>
            </div>
        </div>
    </div>


    <?php
    //    echo count($products);
    foreach ($model->products as $product):
//
        ?>
        <div class="col-xl-4 col-md-6">
            <div class="product">
                <div class="product_image"><img src="/images/product_1.jpg" alt=""></div>
                <div class="product_content">
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div>
                                <div class="product_name"><a
                                            href="../products/view?id=<?= $product->id ?>"><?= $product->title ?></a>
                                </div>
                                <div class="product_category"><?= $model->title ?> <a href="category.html">Cat</a></div>
                            </div>
                        </div>
                        <div class="ml-auto text-right">
                            <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="product_price text-right"><span><?= $product->price ?></span></div>
                        </div>
                    </div>
                    <div class="product_buttons">
                        <!--                                --><?//= Html::a('Додати в кошик', ['/cart/add-product','id'=>$product->id],
                        //                                    ['class'=> 'btn btn-success addProd'])
                        ?>

                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                            <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                <div>
                                    <div><img src="/images/heart_2.svg" class="svg" alt="">
                                        <div>+</div>
                                    </div>
                                </div>
                            </div>
                            <div class="addProdToCart product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                <div>
                                    <div><img src="/images/cart.svg" class="svg" alt="">
                                        <div>+</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    --><?php
//    print_r($model);
    endforeach;
    ?>

</div>

<!-- Home -->

