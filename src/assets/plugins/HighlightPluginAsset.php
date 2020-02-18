<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * Highlight plugin Asset Bundle
 *
 * @since 1.0.0

 */
class HighlightPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $css = [
        'plugins/highlight/ui/trumbowyg.highlight' . (YII_ENV_DEV ? '.min' : '') . '.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'plugins/highlight/trumbowyg.highlight' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}