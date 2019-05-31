<?php
/*@var $categories - список категорій дропдауном*/

use yii\helpers\Html;
use yii\widgets\LinkPager;

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
            <i class="fa fa-american-sign-language-interpreting"></i>
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

<div class="container-fluid padding text-center">
    <div class="row text-center padding align-content-between">
        <?php foreach ($products

        as $product): ?>
        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
            <!--<div class="overflow-auto pos-absolute">-->
            <!--<div class="row text-center padding align-content-between">-->
            <!--    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto ">-->
            <div class=" ">
                <div class="image ">
                    <a href=""><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="d-flex flex-column text-center">
                    <div class="name align-self-center  text-center">
                        <a href="/products/view?id=<?= $product->id ?>">
                            <?= $product->title ?>
                        </a
                    </div>
                    <div class="description align-self-center text-center"><span><?= $product->body ?></span>
                    </div>
                    <div class="price align-self-center text-center"><span>Price</span><?= $product->price ?>
                    </div>
                </div>
                <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                    ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <!--    </div>-->
    <?php endforeach; ?>
</div>

<div class="col">
    <form action="/site" class="select-quantity-form">
        <select name="quantities" id="">
            <?php foreach ($pageList as $key): ?>
                <option value="<?= $key ?>"
                    <?php if ($key === $quantities) echo 'selected' ?>>
                    <?= $key ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

</div>
<div class="container-fluid padding text-center">

    <?= LinkPager::widget([
        'pagination' => $pages,
        'class' => 'text-center'
    ]); ?>
</div>

<!--</div>-->


<!--    <div class="col-md-12">-->
<!--        <div class="row">-->
<!--            <div class=" col col-sm-12 col-md-6 col-lg-4 col-xl-3">-->
<!--                --><? //= \yii\helpers\Html::a('<img src="/images/noimage.png">',
//                    ['/products/view', 'id' => $product->id],
//                    ['target' => "_blank"]) ?>


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
<!--            $.get('/cart/add-product?id=--><? //=$model->id?>
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
