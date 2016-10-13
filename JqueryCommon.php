<?php
namespace inpassor\assets;

class JqueryCommon extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/inpassor-jquery-common';
    public $js = [
        'jquery-common.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
