<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg
 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets;

use yii\web\AssetBundle;

/**
 * Class TrumbowygAsset
 */
class TrumbowygAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/trumbowyg/dist';
    /**
     * @var array
     */
    public $css = [
        'ui/trumbowyg' . (YII_ENV_DEV ? '' : '.min') . '.css'
    ];
    /**
     * @var array
     */
    public $js = [
        'trumbowyg' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}