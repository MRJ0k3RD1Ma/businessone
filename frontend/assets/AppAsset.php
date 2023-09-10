<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/code';
    public $css = [
//        'css/bootstrap.css',
        'css/settings.css',
        'css/layers.css',
        'css/navigation.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
//        'js/jquery.js',
        'js/popover.js',
        'js/bootstrap.min.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/jquery.themepunch.tools.min.js',
        'js/revolution.extension.actions.min.js',
        'js/revolution.extension.carousel.min.js',
        'js/revolution.extension.kenburn.min.js',
        'js/revolution.extension.layeranimation.min.js',
        'js/revolution.extension.migration.min.js',
        'js/revolution.extension.navigation.min.js',
        'js/revolution.extension.parallax.min.js',
        'js/revolution.extension.slideanims.min.js',
        'js/revolution.extension.video.min.js',
        'js/main-slider-script.js',

        'js/plugins.js',
        'js/validate.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.fancybox-media.js',

        'js/script.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
?>

