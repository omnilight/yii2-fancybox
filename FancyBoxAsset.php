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
        'jquery.fancybox.pack.js'
    ];
    public $css = [
        'jquery.fancybox.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 