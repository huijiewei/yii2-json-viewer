<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 6/8/15
 * Time: 12:19
 */

namespace huijiewei\jsonViewer;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class JsonViewerAsset extends AssetBundle
{
    public $sourcePath = '@npm/jquery.json-viewer/json-viewer';

    public $js = [
        'jquery.json-viewer.js',
    ];

    public $css = [
        'jquery.json-viewer.css',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
