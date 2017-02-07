<?php
namespace inpassor\assets;

class JqueryRealplexor extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/inpassor-jquery-realplexor';
    public $js = [
        'jquery-realplexor.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
