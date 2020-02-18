<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * LineHeight plugin Asset Bundle
 *
 * @since 1.0.0

 */
class LineHeightPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $js = [
        'plugins/lineheight/trumbowyg.lineheight' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}