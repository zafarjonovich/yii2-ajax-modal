<?php

namespace zafarjonovich\Yii2AjaxModal\assets;

use yii\web\AssetBundle;

class BaseAjaxModalAsset extends AssetBundle
{
    public $sourcePath = "@base/vendor/zafarjonovich/yii2-ajax-modal/src/dist";

    /**
     * @inheritdoc
     */
    public $js = [
        'js/ajax-modal-js.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/ajax-colors.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}