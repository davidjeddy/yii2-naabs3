# Naabs 3

## What
Naabs 3 (Network access and billing service, version 3) is a module for the Yii2 framework to administer a FreeRadius database.

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

Could not do this without the work of the following person/s and teams:
[Yii Software LLC](https://github.com/yiisoft)
[Eugene Terentev](https://github.com/trntv)

## Install

Either
 - Execute `composer install davidjeddy/yii2-naabs3` in the project root.
 - Or add `"davidjeddy/yii2-naabs3": "^1",` to your projects composer.json in the `required` sections; [THEN](https://www.youtube.com/channel/UCPSfjD7o1CQZXzdAy56c8kg) run `composer install` in the projects root.

## Usage
1) Add the module via the ./config/web.php configuration file.
```
    'modules' => [
        ....
        'naabs3' => [
            'class' => dje\naabs3\Module::class,
            'defaultRoute' => 'site/index'
        ],
        ...
    ],
```

