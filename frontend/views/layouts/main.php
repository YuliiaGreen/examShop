<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\models\Categories;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

//use Yii;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /*.super_container_inner {*/
        /*    margin-top: 59px;*/
        /*}*/
    </style>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- Menu -->

    <div class="menu">

        <!-- Search -->
        <div class="menu_search">
            <form action="<?= \yii\helpers\Url::to('/site/search') ?>" id="menu_search_form" class="menu_search_form">
                <input type="text" name="param" class="search_input" placeholder="Search Item" required="required">
                <button class="menu_search_button"><img src="/images/search.png" alt=""></button>
                <input type="submit">
                <!--            </form>-->
                <!--            <form action="#" id="menu_search_form" class="menu_search_form">-->
                <!--                <input type="text" class="search_input" placeholder="Search Item" required="required">-->
                <!--                <button class="menu_search_button"><img src="/images/search.png" alt=""></button>-->
                <!--            </form>-->
        </div>
        <!-- Navigation -->
        <div class="menu_nav">
            <ul>
                <li><a href="#">Головна</a></li>
                <li><a href="#">Про нас</a></li>
                <li><a href="#">Контакти</a></li>
                <li><a href="#">Реєстрація</a></li>
                <li><a href="#">Вхід</a></li>
                <?php if (!empty($this->params['categoriesDropdown'])): ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                           id="dropdownMenuLink">Категорії</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($this->params['categoriesDropdown'] as $category): ?>
                                <li class="p-2">
                                    <a href="categories/view?id=<?= $category->id ?>"><?= $category->title ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- Contact Info -->
        <div class="menu_contact">
            <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
                <div>
                    <div><img src="/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                </div>
                <div>+38 099 999 99 99</div>
            </div>
            <div class="menu_social">
                <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="super_container">

        <!-- Header -->

        <header class="header">
            <div class="header_overlay"></div>
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                <div class="logo">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <?= Html::a(Html::img('/images/logo_1.png', ['alt' => 'MyShopLogo']), [Yii::$app->homeUrl]); ?>
                        <div><span class="shop-name"></span>My Shop</div>
                    </div>
                </div>
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li class="active"><a href="<?= Yii::$app->homeUrl ?>">Головна</a></li>
                        <li><a href="#">Про нас</a></li>
                        <li><a href="#">Контакти</a></li>

                        <?php if (!empty($this->params['categoriesDropdown'])): ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown"
                                   id="dropdownMenuLink">Категорії</a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->params['categoriesDropdown'] as $category): ?>
                                        <li>
                                            <a href="categories/view?id=<?= $category->id ?>"><?= $category->title ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>


                    </ul>
                </nav>
                <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                    <!-- Search -->
                    <div class="header_search">
                        <form action="#" id="header_search_form">
                            <input type="text" class="search_input" placeholder="Search Item" required="required">
                            <button class="header_search_button"><img src="/images/search.png" alt=""></button>
                        </form>
                    </div>
                    <!-- User -->
                    <div class="user">
                        <a href="site/login">
                            <div><img src="/images/user.svg" alt="https://www.flaticon.com/authors/freepik">
                                <div>1</div>
                            </div>
                        </a>
                    </div>
                    <!-- Cart -->
                    <div class="cart">
                        <a href="../cart" ">
                        <div><img class="svg" src="/images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
                        </div>
                        </a>
                    </div>
                    <!--                    TODO  -->
                    <!--                    <div class="cart">-->
                    <!--                        --><? //= Html::a(Html::img('/images/cart.svg', ['alt'=>'https://www.flaticon.com/authors/freepik'],['class' => 'svg']),
                    //                            ['cart/index'])?>
                    <!--                    </div>-->
                    <!-- Phone -->
                    <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div><img src="/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        </div>
                        <div>
                            +38 099 999 99 99
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="super_container_inner">
            <div class="super_overlay"></div>
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>

                <!--            <div class="row products_row">-->
                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= Yii::$app->session->getFlash('success'); ?>
                </div>
                <?php endif; ?>
                <?php if (Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo Yii::$app->session->getFlash('error'); ?>
                    </div>
                <?php endif; ?>
                <?php if (Yii::$app->session->hasFlash('notLog')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo Yii::$app->session->getFlash('notLog'); ?>
                    </div>
                <?php endif; ?>
                <!--            </div>-->

            </div>
            <?= $content ?>
        </div>
    </div>
        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">
                        <!--                    <div class="row page_nav_row">-->
                        <!--                        <div class="col">-->
                        <!--                            <div class="page_nav">-->
                        <!--                                <ul class="d-flex flex-row align-items-start justify-content-center">-->
                        <!--                                    <li class="active"><a href="category.html">Women</a></li>-->
                        <!--                                    <li><a href="category.html">Men</a></li>-->
                        <!--                                    <li><a href="category.html">Kids</a></li>-->
                        <!--                                    <li><a href="category.html">Home Deco</a></li>-->
                        <!--                                </ul>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!-- About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_logo_icon"><img src="/images/logo_2.png" alt=""></div>
                                            <div>Little Closet</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_menu">
                                <div class="footer_title">Support</div>
                                <ul class="footer_list">
                                    <li>
                                        <a href="#">
                                            <div>Customer Service
                                                <div class="footer_tag_1">online now</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>Return Policy</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>Size Guide
                                                <div class="footer_tag_2">recommended</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>Terms and Conditions</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>Contact</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Stay in Touch</div>
                                <div class="newsletter">
                                    <form action="#" id="newsletter_form" class="newsletter_form">
                                        <input type="email" class="newsletter_input"
                                               placeholder="Subscribe to our Newsletter" required="required">
                                        <button class="newsletter_button">+</button>
                                    </form>
                                </div>
                                <div class="footer_social">
                                    <div class="footer_title">Social</div>
                                    <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                <div class="copyright order-md-1 order-2">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                    All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                        aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="category.html">Women</a></li>
                                        <li><a href="category.html">Men</a></li>
                                        <li><a href="category.html">Kids</a></li>
                                        <li><a href="category.html">Home Deco</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            window.onload = function () {
                $('.addProdToCart').on('click', function (ev) {
                    ev.preventDefault();
                    // console.log('clicked');
                    $.get('/cart/add-product?id=' + this.dataset.id, function (message) {
                        // console.log('status');
                        // console.log(message);


                        if (message.status == 'error') {
                            $('.alert.alert-danger').html('Product can not be added to the cart');
                        } else {
                            $('.alert.alert-success').html('Product added to the cart');
                        }
                    })
                })


                $('.select-quantity-form').on('change', function () {
                    $('.select-quantity-form').submit();
                })
            }
            //</script>
        <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
