# Trumbowyg extension for Yii 2


## Install
Either run
```
php composer.phar require --prefer-dist androphin/yii2-trumbowyg "*"
```

or add

```
"androphin/yii2-trumbowyg": "*"
```

to the require section of your `composer.json` file.

## Basic usage:
```php
use androphin\yii2\extensions\trumbowyg\TrumbowygWidget;

echo $form->field($model, 'content')->widget(TrumbowygWidget::class);
```

## Advanced usage
```php
use androphin\yii2\extensions\trumbowyg\TrumbowygWidget;

echo $form->field($model, 'content')->widget(TrumbowygWidget::className(), [
    'clientOptions' => [
        'btns' => [
            ['viewHTML'],
            ['undo', 'redo'],
            ['table'],
            ['formatting'],
            ['strong', 'em', 'del'],
            ['link'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['removeformat'],
            ['fullscreen'],
            ['upload'],
        ]
    ],
    'plugins' => [
        TrumbowygWidget::PLUGIN_UPLOAD,
        TrumbowygWidget::PLUGIN_TABLE,
        TrumbowygWidget::PLUGIN_HISTORY
    ]
]);
```
