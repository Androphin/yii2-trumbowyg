<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg

 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets\plugins;

use androphin\yii2\extensions\trumbowyg\assets\PluginAsset;

/**
 * InsertAudio plugin Asset Bundle
 *
 * @since 1.0.0

 */
class InsertAudioPluginAsset extends PluginAsset
{
    /**
     * @var array
     */
    public $js = [
        'plugins/insertaudio/trumbowyg.insertaudio' . (YII_ENV_DEV ? '.min' : '') . '.js',
    ];
}