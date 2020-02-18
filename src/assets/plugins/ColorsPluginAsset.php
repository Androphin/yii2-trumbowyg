<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * Colors plugin Asset Bundle
 *
 * @since 1.0.0

 */
class ColorsPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $css = [
        'plugins/colors/ui/trumbowyg.colors' . (YII_ENV_DEV ? '.min' : '') . '.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'plugins/colors/trumbowyg.colors' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}