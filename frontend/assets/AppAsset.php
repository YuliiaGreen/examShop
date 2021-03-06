<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/bootstrap-4.1.2/bootstrap.min.css',
        'plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        'css/style.css'
//        'plugins/OwlCarousel2-2.2.1/owl.carousel.css',
//        'plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
//        'plugins/OwlCarousel2-2.2.1/animate.css',
//        'css/main_styles.css',
//        'css/responsive.css',

//        'css/site.css',
//        'css/cart.css',
//        'css/cart_responsive.css',
    ];
    public $plugins = [

    ];
    public $js = [
//        'js/jquery-3.2.1.min.js',
//        'css/bootstrap-4.1.2/popper.js',
//        'css/bootstrap-4.1.2/bootstrap.min.js',
//        'plugins/greensock/TweenMax.min.js',
//        'plugins/greensock/TimelineMax.min.js',
//        'plugins/scrollmagic/ScrollMagic.min.js',
//        'plugins/greensock/animation.gsap.min.js',
//        'plugins/greensock/ScrollToPlugin.min.js',
//        'plugins/OwlCarousel2-2.2.1/owl.carousel.js',
//        'plugins/easing/easing.js',
//        'plugins/progressbar/progressbar.min.js',
//        'plugins/parallax-js-master/parallax.min.js',
//        'js/custom.js'
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        'https://use.fontawesome.com/releases/v5.0.8/js/all.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
