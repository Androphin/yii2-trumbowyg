<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * Mention plugin Asset Bundle
 *
 * @since 1.0.0

 */
class MentionPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $css = [
        'plugins/mention/ui/trumbowyg.mention' . (YII_ENV_DEV ? '.min' : '') . '.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'plugins/mention/trumbowyg.mention' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}