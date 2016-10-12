<?php
namespace inpassor\assets;

class JqueryCommon extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/inpassor-jquery-common';
    public $js = [
        'js/jquery-common' . (YII_ENV_DEV ? '' : '.min') . '.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
