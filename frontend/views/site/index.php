
<?php
/*@var $categories - список категорій дропдауном*/

use yii\helpers\Html;

$this->params['categoriesDropdown'] = $categories;
?>
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/slides1.jpg" alt="">
            <div class="carousel-caption">
                <h1>examShop</h1>
                <h3> description of the shop</h3>
                <button type="button" class="btn btn-outline-light btn-lg">
                    BUTTON
                </button>
                <button type="button" class="btn btn-primary btn-lg">
                    SIGN UP
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/slides2.png" alt="">
        </div>
        <div class="carousel-item">
            <img src="/images/slides3.png" alt="">
        </div>
    </div>
</div>
<!--three column section-->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-american-sign-language-interpreting"></i>
            <h3>New 1</h3>
            <p>New1 Text</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-hands-helping"></i>
            <h3>New 2</h3>
            <p>New2 Text</p>
        </div>
        <div class="col-sm-12  col-md-4">
            <i class="fas fa-hand-holding-heart"></i>
            <h3>New 3</h3>
            <p>New3 Text</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<!--/three column section-->

<div class="d-flex align-items-center justify-content-center">
    <!--<div class="row text-center padding align-content-between">-->
    <div class="col-xs-12 col-sm-6 col-md-4 m-auto justify-content-center align-self-center">
        <div class="image ">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="d-flex flex-column">
            <div class="name align-self-center">sefsef</div>
            <div class="description align-self-center"><span></spandgdgdggd</span></div>
            <div class="price align-self-center"><span>Price</span>465645</div>
        </div>
        <div>gsrgsdryhty</div>
        <button class="btn">fd</button>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 m-auto justify-content-center">
        <div class="image ">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="center-block">
            <div class="name">sefsef</div>
            <div class="description"><span></spandgdgdggd</span></div>
            <div class="price"><span>Price</span>465645</div>
        </div>
        <div>gsrgsdryhty</div>
        <button class="btn">fd</button>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 m-auto">
        <div class="image ">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="center-block">
            <div class="name">sefsef</div>
            <div class="description"><span></spandgdgdggd</span></div>
            <div class="price"><span>Price</span>465645</div>
        </div>
        <div>gsrgsdryhty</div>
        <button class="btn">fd</button>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 m-auto">
        <div class="image ">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="center-block">
            <div class="name">sefsef</div>
            <div class="description"><span></spandgdgdggd</span></div>
            <div class="price"><span>Price</span>465645</div>
        </div>
        <div>gsrgsdryhty</div>
        <button class="btn">fd</button>
    </div>


</div>


<!--     Products -->-->
<!---->
<!--    <div class="products">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6 offset-lg-3">-->
<!--                    <div class="section_title text-center">Popular on Little Closet</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row page_nav_row">-->
<!--                <div class="col">-->
<!--                    <div class="page_nav">-->
<!--                        <ul class="d-flex flex-row align-items-start justify-content-center">-->
<!--                            <li class="active"><a href="category.html">Women</a></li>-->
<!--                            <li><a href="category.html">Men</a></li>-->
<!--                            <li><a href="category.html">Kids</a></li>-->
<!--                            <li><a href="category.html">Home Deco</a></li>-->
<!--                            <li><a href="category.html">Categories</a></li>-->
<!---->
<!--                    </div>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!--                --><?php //if(Yii::$app->session->hasFlash('success')):?>
        <!--                    <div class="alert alert-success" role="alert">-->
        <!--                        --><? //= Yii::$app->session->getFlash('success'); ?>
        <!--                    </div>-->
        <!--                --><?php //endif;?>
        <!--                --><?php //if(Yii::$app->session->hasFlash('error')):?>
        <!--                <div class="alert alert-danger" role="alert">-->
        <!--                    --><?php //echo Yii::$app->session->getFlash('error'); ?>
        <!--                </div>-->
        <!--                --><?php //endif;?>
        <!--				<div class="row products_row">-->


        <!-- Product -->
<!--        --><?php
//        //        echo count($products);
//        foreach ($products as $product):
//            ?>
<!--            <div class="col-xl-4 col-md-6">-->
<!--                <div class="product">-->
<!--                    <div class="product_image"><img src="/images/product_1.jpg" alt=""></div>-->
<!--                    <div class="product_content">-->
<!--                        <div class="product_info d-flex flex-row align-items-start justify-content-start">-->
<!--                            <div>-->
<!--                                <div>-->
<!--                                    <div class="product_name"><a-->
<!--                                                href="../products/view?id=--><? //= $product->id ?><!--">--><? //= $product->title ?><!--</a>-->
<!--                                    </div>-->
<!--                                    <div class="product_category">In <a href="category.html">Cat</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="ml-auto text-right">-->
<!--                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i>-->
<!--                                </div>-->
<!--                                <div class="product_price text-right"><span>--><? //= $product->price ?><!--</span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product_buttons">-->
<!--                            <div class="text-right d-flex flex-row align-items-start justify-content-start">-->
<!--                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">-->
<!--                                    <div>-->
<!--                                        <div><img src="/images/heart_2.svg" class="svg" alt="">-->
<!--                                            <div>+</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div data-id="--><? //= $product->id ?><!--"-->
<!--                                     class="addProdToCart product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">-->
<!--                                    <div>-->
<!--                                        <div><img src="/images/cart.svg" class="svg" alt="">-->
<!--                                            <div>+</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endforeach; ?>
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
</div>
</div>




<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<!--<script src="styles/bootstrap-4.1.2/popper.js"></script>-->
<!--<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>-->
<!--<script src="plugins/greensock/TweenMax.min.js"></script>-->
<!--<script src="plugins/greensock/TimelineMax.min.js"></script>-->
<!--<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>-->
<!--<script src="plugins/greensock/animation.gsap.min.js"></script>-->
<!--<script src="plugins/greensock/ScrollToPlugin.min.js"></script>-->
<!--<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>-->
<!--<script src="plugins/easing/easing.js"></script>-->
<!--<script src="plugins/progressbar/progressbar.min.js"></script>-->
<!--<script src="plugins/parallax-js-master/parallax.min.js"></script>-->
<!--<script src="js/custom.js"></script>-->
<!--<script>-->
<!--    window.onload = function () {-->
<!--        $('.addProdToCart').on('click', function (ev) {-->
<!--            ev.preventDefault();-->
<!--            $.get('/cart/add-product?id=--><? //=$model->id?>//',
<!--function (msg) {-->
<!--//-->
<!--//                console.log(msg);-->
<!--//                if (msg.status === 'error') {-->
<!--//                    $('.ajax-response').html('Product can not be added to the cart');-->
<!--//                } else {-->
<!--//                    $('.ajax-response').html('Product added to the cart');-->
<!--//                }-->
<!--//            })-->
<!--//        })-->
<!--//-->
<!--//-->
<!--//        $('.addProdToCart').on('click', function (ev) {-->
<!--//            ev.preventDefault();-->
<!--//            $.get('/cart/add-product?id=--><? // //=$model->id?><!--//', function (msg) {-->
<!--//-->
<!--//                console.log(msg); // if (msg.status === 'error') {-->
<!--//                //     $('.ajax-response').html('Product can not be added to the cart');-->
<!--//                // } else {-->
<!--//                //     $('.ajax-response').html('Product added to the cart');-->
<!--//                // }-->
<!--//            })-->
<!--//        })-->
<!--//        $('.select-quantity-form').on('change', function () {-->
<!--//            $('.select-quantity-form').submit();-->
<!--//        })-->
<!--//    }-->
<!--//</script>-->
