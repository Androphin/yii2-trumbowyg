<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * MathML plugin Asset Bundle
 *
 * @since 1.0.0

 */
class MathMLPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $css = [
        'plugins/mathml/ui/trumbowyg.mathml' . (YII_ENV_DEV ? '.min' : '') . '.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'plugins/mathml/trumbowyg.mathml' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}