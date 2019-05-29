<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'vendor/lightbox2/css/lightbox.min.css',
        'vendor/slick/slick.css',
        'vendor/daterangepicker/daterangepicker.css',
        'vendor/select2/select2.min.css',
        'vendor/animsition/css/animsition.min.css',
        'vendor/css-hamburgers/hamburgers.min.css',
        'vendor/animate/animate.css',
        'fonts/elegant-font/html-css/style.css',
        'fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'fonts/themify/themify-icons.css',
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'css/site.css',
        'css/util.css',
        'css/main.css',


    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
