<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * Base64 plugin Asset Bundle
 *
 * @since 1.0.0

 */
class Base64PluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $js = [
        'plugins/base64/trumbowyg.base64' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}