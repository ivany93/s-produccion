<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/fonts.css',
        'css/normalize.css',
        'css/jquery.mCustomScrollbar.css',
        'css/lightgallery.css',
        'css/lightslider.css',
        'css/animate.css',
        'css/style.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
public function registerAssetFiles($view)
{
    parent::registerAssetFiles($view);
    $manager = $view->getAssetManager();
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery-3.2.1.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery.mCustomScrollbar.concat.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery.waypoints.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/picturefill.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/lightgallery-all.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery.mousewheel.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/lg-thumbnail.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this,  'js/libs/lg-fullscreen.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/lightslider.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/CSSPlugin.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/EasePack.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/EaselPlugin.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/TimelineMax.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/TweenMax.min.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery.fittext.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery.lettering.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/libs/jquery.textillate.js'), ['position' => View::POS_END]);
    $view->registerJsFile($manager->getAssetUrl($this, 'js/main.js'), ['position' => View::POS_END]);
}
}
