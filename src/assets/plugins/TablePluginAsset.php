<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * Table plugin Asset Bundle
 *
 * @since 1.0.0

 */
class TablePluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $css = [
        'plugins/table/ui/trumbowyg.table' . (YII_ENV_DEV ? '.min' : '') . '.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'plugins/table/trumbowyg.table' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}