<?php
namespace inpassor\assets;

class JqueryRealplexor extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/inpassor-jquery-realplexor';
    public $js = [
        'js/jquery-realplexor' . (YII_ENV_DEV ? '' : '.min') . '.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
