<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg
 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets;

use yii\web\AssetBundle;

/**
 * Abstract plugin Asset Bundle
 *
 */
abstract class PluginAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/trumbowyg/dist';
    /**
     * @var array
     */
    public $depends = [
        'androphin\yii2\extensions\trumbowyg\assets\TrumbowygAsset'
    ];
}