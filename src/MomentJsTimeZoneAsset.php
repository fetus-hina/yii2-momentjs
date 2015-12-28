<?php
/**
 * @copyright Copyright (C) 2015 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-momentjs/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\momentjs;

use Yii;
use yii\web\AssetBundle;

class MomentJsTimeZoneAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment-timezone/builds';
    public $js = [
        'moment-timezone-with-data.min.js',
    ];
    public $depends = [
        'jp3cki\yii2\momentjs\MomentJsAsset',
    ];
}
