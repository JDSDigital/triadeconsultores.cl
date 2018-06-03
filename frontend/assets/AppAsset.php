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
        'css/bootstrap.css',
        'css/settings.css',
        'css/style.css',
        'css/responsive.css',
        'css/animate.css',
        'css/colors/blue.css',
        'css/fontello.css',
        'css/fontello-ie7.css',
        'css/master.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.migrate.js',
        'js/modernizrr.js',
        'js/bootstrap.js',
        'js/jquery.fitvids.js',
        'js/owl.carousel.min.js',
        'js/nivo-lightbox.min.js',
        'js/jquery.isotope.min.js',
        'js/jquery.appear.js',
        'js/count-to.js',
        'js/jquery.textillate.js',
        'js/jquery.lettering.js',
        'js/jquery.easypiechart.min.js',
        'js/jquery.nicescroll.min.js',
        'js/jquery.parallax.js',
        // 'js/mediaelement-and-player.js',
        'js/jquery.themepunch.plugins.min.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/wow.min.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
