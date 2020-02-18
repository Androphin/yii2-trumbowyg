<?php
/**
 * @link https://github.com/androphin/yii2-trumbowyg
 * @licence http://opensource.org/licenses/MIT MIT
 */

namespace androphin\yii2\extensions\trumbowyg\assets;

use yii\web\AssetBundle;

/**
 * Abstract locale translation Asset Bundle
 *
 */
abstract class LangAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/trumbowyg/dist';
    /**
     * @inheritdoc
     */
    public $depends = [
        'androphin\yii2\extensions\trumbowyg\assets\TrumbowygAsset'
    ];
}