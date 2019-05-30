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

$this->beginPage() ?>

    <!DOCTYPE html>
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

    <body>
    <?php $this->beginBody() ?>
    <header>
        <!-- Navigation -->

        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a href="<? Yii::$app->homeUrl ?>" class="navbar-brand overflow-hidden">
                    <img src="/images/logo.png" style="height: 50px;" class="img-fluid rounded float-left"
                         alt="Responsive image">
                </a>
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
                            <a class="nav-link" href="">Про нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Контакти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Yii::$app->homeUrl ?>site/login">Вхід</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Реєстрація</a>
                        </li>
                        <li class="dropdown  nav-item">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown"
                               id="dropdownMenuLink">Категорії</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($this->params['categoriesDropdown'] as $category): ?>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="categories/view?id=<?= $category->id ?>"><?= $category->title ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu_search navbar-nav ml-auto">
                        <form action="<?= \yii\helpers\Url::to('/site/search') ?>" id="menu_search_form"
                              class="menu_search_form">
                            <input type="text" name="param" class="search_input" placeholder="Search Item"
                                   required="required">
                            <button type="submit" class="menu_search_button"><img src="/images/search.png" alt="">
                            </button>
                            <!--                                    <input type="submit">-->
                        </div>

                    </div>
        </nav>
    </header>

    <?= $content ?>
    <div class="connect">
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-12">
                    <h2>JOIN</h2>
                </div>
                <div class="col-12 social padding">

                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-telegram"></i></a>
                    <a href=""><i class="fab fa-google"></i></a>

                </div>
            </div>
        </div>
    </div>
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
                    <p> Our Hours</p>
                    <hr class="light">
                    <p>Monday</p>
                    <p>Tuesday</p>
                    <p>Wednesday</p>
                    <p>Thursday</p>
                        </div>
                <div class="col-md-4">
                    <hr class="light">
                    <p>Details</p>
                    <hr class="light">
                    <p>+30 000 00 00</p>
                    <p>examShop@gmail.com</p>
                    <p>100 Street Name</p>
                    <p>Lutsk, Volyn region</p>
                </div>
                <div class="col-12">
                    <hr class="light">
                    <h5> Yulia Maxymchuk 2019</h5>
                </div>
            </div>
                </div>

    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>