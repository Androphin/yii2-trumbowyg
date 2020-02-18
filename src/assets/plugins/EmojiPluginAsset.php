<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * Emoji plugin Asset Bundle
 *
 * @since 1.0.0

 */
class EmojiPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $css = [
        'plugins/emoji/ui/trumbowyg.emoji' . (YII_ENV_DEV ? '.min' : '') . '.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'plugins/emoji/trumbowyg.emoji' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}