<?php
declare(strict_types=1);

namespace dje\naabs3;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'dje\naabs3\controllers';

    public function init()
    {
        // load .env if the framework as not already
        $dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
        $dotenv->load();

        parent::init();
    }
}
