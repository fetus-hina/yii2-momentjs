<?php
/**
 * @copyright Copyright (C) 2015 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-momentjs/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\momentjs;

use Yii;
use yii\web\AssetBundle;

class MomentJsLocaleAsset extends AssetBundle
{
    public $language = null;

    public $sourcePath = '@bower/moment/locale';
    public $depends = [
        'jp3cki\yii2\momentjs\MomentJsAsset',
    ];

    public function init()
    {
        $lang = strtolower($this->language ?: Yii::$app->language);
        if ($lang !== 'en' && $lang !== 'en-us') {
            $dir = Yii::getAlias($this->sourcePath);
            if (file_exists("{$dir}/{$lang}.js")) {
                $this->js[] = "{$lang}.js";
            } elseif (preg_match('/^(\w+)-/', $lang, $match) && file_exists("{$dir}/{$match[1]}.js")) {
                $this->js[] = "{$match[1]}.js";
            }
        }
        return parent::init();
    }
}
