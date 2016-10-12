<?php
namespace inpassor\assets;

class JqueryApplication extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/inpassor-jquery-application';
    public $js = [
        'js/jquery-application' . (YII_ENV_DEV ? '' : '.min') . '.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
