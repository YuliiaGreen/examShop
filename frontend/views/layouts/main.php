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

$this->beginPage();
$categories = \common\models\CategoriesSearch::getParentCategories();
$this->params['categoriesDropdown'] = $categories
?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>

<header>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <?= Html::a(Html::img('/images/logo.png', [
                'alt' => 'MyShopLogo',
                'style' => "height: 50px;",
                'class' => "img-fluid rounded float-left p-2"
            ]), [Yii::$app->homeUrl], ['class' => "navbar-brand overflow-hidden"]
            ) ?>
            <!--/*                <a href="-->
            <? // Yii::$app->homeUrl?><!--" class="navbar-brand overflow-hidden">*/-->
            <!--//                    <img src="/images/logo.png" style="height: 50px;" class="img-fluid rounded float-left"-->
            <!--//                         alt="Responsive image">-->
            <!--//                </a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= Yii::$app->homeUrl ?>">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#join">Про нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакти</a>
                    </li>
                    <li class="dropdown  nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown"
                           id="dropdownMenuLink">Категорії</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($this->params['categoriesDropdown'] as $category): ?>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="<?= Yii::$app->homeUrl ?>categories/view?id=<?= $category->id ?>"><?= $category->title ?></a>
                                    <!--                                       href="#-->
                                    <? //= $category->title ?><!--">--><? //= $category->title ?><!--</a>-->
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php if (Yii::$app->user->isGuest == false): ?>
                        <li>
                            <?= Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Вихід (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm() ?>
                        </li>;
                    <?php endif; ?>
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Yii::$app->homeUrl ?>site/login">Вхід</a>
                        </li>
                    <?php endif; ?>
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Yii::$app->homeUrl ?>site/signup">Реєстрація</a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->homeUrl ?>cart"><img style="height: 40px"
                                                                                      class="img-fluid"
                                                                                      alt="Responsive image"
                                                                                      src="/images/cart.svg"
                                                                                      alt="https://www.flaticon.com/authors/freepik"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?= Yii::$app->homeUrl ?>user/update"><img
                                    style="height: 40px"
                                    class="img-fluid"
                                    alt="Responsive image"
                                    src="/images/user.svg"
                                    alt="https://www.flaticon.com/authors/freepik"></a>
                    </li>

                </ul>
                <div class="menu_search navbar-nav ml-auto">
                    <form action="<?= \yii\helpers\Url::to('/site/search') ?>" id="menu_search_form"
                          class="menu_search_form">
                        <div class="search-form-parent-item">
                            <input type="text" name="param" class="search_input" placeholder="Search Item"
                            >
                            <button type="submit" class="menu_search_button"><img src="/images/search.png" alt="">
                            </button>
                        </div>
                        <!--                                    <input type="submit">-->
                    </form>
                </div>

            </div>
    </nav>
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
</header>
<!--<pre>-->
<?php //if(empty(Yii::$app->user->identity['phoneNomber'])){
//    echo 'empty';
//};?>
<!--</pre>-->
<?= $content ?>

<div class="connect">
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2 id="join">Приєднуйся</h2>
            </div>
            <div class="col-12 social padding">

                <a href="https://www.youtube.com/channel/UCWAuDWCKTplBMGYvmxOEQWg?view_as=subscriber"><i
                            class="fab fa-youtube"></i></a>
                <a href="https://www.facebook.com/gravityspaces/"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com/gravityspaces?igshid=18p1qsv8kntwy"><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-telegram"></i></a>
                <a href=""><i class="fab fa-google"></i></a>

            </div>
        </div>
    </div>
</div>
<!--Google map-->

<main class=" m-0 p-0 ">
    <div class="container-fluid m-0 p-0">
        <!--Google map-->
        <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80797.60223097516!2d25.263964752676518!3d50.739878611418355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599eba185965d%3A0xd25274a2228db86c!2z0JvRg9GG0YzQuiwg0JLQvtC70LjQvdGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1559294697840!5m2!1suk!2sua"
                    style="border:0" allowfullscreen>

            </iframe>
        </div>
    </div>
</main>
<!--Main layout-->
<footer>
    <!--                -->
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <p style="overflow: hidden;" class="top-cover center-block">
                    <a href="<? Yii::$app->homeUrl ?>">
                        <img src="/images/logo.png" style="height: 100px" class="img-fluid rounded"
                             alt="Responsive image">
                    </a>
                </p>
                <hr class="light">
            </div>
            <div class="col-md-4">
                <!--                            <img src="/images/logo.png" alt="">-->
                <hr class="light">
                <p> Робочі години</p>
                <hr class="light">
                <p>Будні дні</p>
                <p>8.00 -16.00</p>
                <p>Субота</p>
                <p> 10.00-16.00</p>

            </div>
            <div id="contact" class="col-md-4">
                <hr class="light">
                <p>Деталі</p>
                <hr class="light">
                <p>+30 000 00 00</p>
                <p>examShop@gmail.com</p>
                <p>вул. Лесі Українки, 52</p>
                <p>Луцьк, Волинська обл.</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5> Yulia Maxymchuk 2019</h5>
            </div>
        </div>
    </div>

</footer>
<script>
    if (document.getElementsByClassName('select-quantity-form').length > 0) {
        document.getElementsByClassName('select-quantity-form')[0].addEventListener('change', function () {
            // console.log(this);
            this.submit();
        })
    }
</script>
<script>
    // window.onload = function () {
    //     var attribute = $('.dynamic-attributes .single-attribute').html();
    //     $('.dynamic-attributes .add-attribute').on('click', function () {
    //         $('.dynamic-attributes').append(attribute);
    //     });
    // }
</script>
<script>
    window.onload = function () {
        var page =<?=$page - 1?>;
        $('btn.btn-success.prev-page').on('click', function (ev) {
            ev.preventDefault();
            $.get('/products/index?page=' + page + '&quantities=<?=$quantities?>, function (msg) {
            page--;
            console.log(msg);
            // if (msg.status === 'error') {
            //     $('.ajax-response').html('Product can not be added to the cart');
            // } else {
            //     $('.ajax-response').html('Product added to the cart');
        }
    }
    )

    }
    $('btn.btn-success.next-page').on('click', function (ev) {
        ev.preventDefault();
        $.get('/products/index?page=<?=($page + 1)?>&quantities=<?=$quantities?>, function (msg) {
        // if (msg.status === 'error') {
        //     $('.ajax-response').html('Product can not be added to the cart');
        // } else {
        //     $('.ajax-response').html('Product added to the cart');
        // }
    })

</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

