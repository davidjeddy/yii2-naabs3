<?php
declare(strict_types=1);

namespace backend\modules\i18n;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'dje\yii2-naabs3\backend\controllers';

    public function init()
    {
        // load .env if the framework as not already
        $dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
        $dotenv->load();

        parent::init();
    }
}
