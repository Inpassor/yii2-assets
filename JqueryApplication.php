<?php
namespace inpassor\assets;

class JqueryApplication extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/inpassor-jquery-application';
    public $js = [
        'jquery-application.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'inpassor\assets\JqueryCommon',
    ];

}
