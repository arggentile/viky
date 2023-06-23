<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author agentile
 * @since 2.0
 */
class FontAwesomeAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'fontawesome/css/all.min.js',
    ];
    public $css = [
        'fontawesome/css/all.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
