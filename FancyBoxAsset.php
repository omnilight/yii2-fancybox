<?php

namespace omnilight\assets;

use yii\web\AssetBundle;


/**
 * Class FancyBoxAsset
 */
class FancyBoxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox/source';

    public $js = [
        'jquery.fancybox.pack.js',
        'jquery.fancybox-buttons.js',
    ];
    public $css = [
        'jquery.fancybox.css',
        'jquery.fancybox-buttons.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 