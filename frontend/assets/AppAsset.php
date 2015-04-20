<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'css/default.css',
        'css/mystyle.css',
        'css/fancybox/source/jquery.fancybox.css?v=2.1.5',
    ];
    public $js = [
        // 'js/jquery-2.0.0.min.js'
        'js/fancybox/source/jquery.fancybox.js?v=2.1.5',
        'js/jquery.jcarousellite.min.js',
        'js/html5.js',
        'js/script.js',
        'js/myscript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
