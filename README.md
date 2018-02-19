# Naabs 3

## About
Naabs 3 (Network access and billing service, version 3) is a module for the Yii2 framework to administer a FreeRadius 3.x (FR) database.

## Badges
[![Build Status](https://travis-ci.org/davidjeddy/yii2-naabs3.svg?branch=master&format=flat-square)](https://travis-ci.org/davidjeddy/yii2-naabs3)
[![Latest Stable Version](https://poser.pugx.org/davidjeddy/yii2-naabs3/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![Total Downloads](https://poser.pugx.org/davidjeddy/yii2-naabs3/downloads?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/yii2-naabs3/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![License](https://poser.pugx.org/davidjeddy/yii2-naabs3/license?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![Monthly Downloads](https://poser.pugx.org/davidjeddy/yii2-naabs3/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/yii2-naabs3/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![composer.lock](https://poser.pugx.org/davidjeddy/yii2-naabs3/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-naabs3)
[![codecov](https://codecov.io/gh/davidjeddy/yii2-naabs3/branch/master/graph/badge.svg?format=flat-square)](https://codecov.io/gh/davidjeddy/yii2-naabs3)
[![Maintainability](https://api.codeclimate.com/v1/badges/778bacb18bbdcda58ac7/maintainability?format=flat-square)](https://codeclimate.com/github/davidjeddy/yii2-naabs3/maintainability)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/1977432a-f69f-480d-a0cb-1f65627ba8f3/big.png?format=flat-square)](https://insight.sensiolabs.com/projects/1977432a-f69f-480d-a0cb-1f65627ba8f3)

## Credit
This project would not be possible without efforts of the following person/s and teams:
[Yii Software LLC](https://github.com/yiisoft)
[Eugene Terentev](https://github.com/trntv)
[FreeRADIUS Team](https://freeradius.org/)

## Docker containers
[FreeRadius](https://hub.docker.com/r/marcelmaatkamp/freeradius/)
[Yii2](https://hub.docker.com/r/dmstr/php-yii2/)

## Install
Pick one:
 - Install Yii2 framework (we recommend the [Yii2-Starter-Kit](https://github.com/trntv/yii2-starter-kit))
 - Execute `composer install davidjeddy/yii2-naabs3` in the projects root.
   - OR `"davidjeddy/yii2-naabs3": "^1",` to your projects composer.json in the `required` sections; [THEN](https://www.youtube.com/channel/UCPSfjD7o1CQZXzdAy56c8kg) run `composer install` in the projects root.

## Note
This project `might` also work on a propratery RADIUS implimentation; however we do not have one available so YMMV.

## Usage
### Yii2 Framework Configuration
1) Add the module to the frameworks `./config/web.php` and configuration the connection creditials as needed
```PHP
    'modules' => [
        ....
        'naabs3' => [
            'class' => dje\naabs3\Module::class,
            'defaultRoute' => 'site/index'
            'db' => [
                'class'     => yii\db\Connection::class,
                'dsn'       => env('FR_DB_DSN'),
                'username'  => env('FR_DB_USERNAME'),
                'password'  => env('FR_DB_PASSWORD'),
                'charset'   => env('FR_DB_CHARSET', 'utf8'),
            ],
        ],
        ...
    ],
```

