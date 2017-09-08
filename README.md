<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Font Awesome Extension for Yii 2 </h1>
    <br>
</p>

Font Awesome Asset Bundle for Yii2 framework

[![Latest Stable Version](https://poser.pugx.org/yidas/yii2-fontawesome/v/stable?format=flat-square)](https://packagist.org/packages/yidas/yii2-fontawesome)
[![Latest Unstable Version](https://poser.pugx.org/yidas/yii2-fontawesome/v/unstable?format=flat-square)](https://packagist.org/packages/yidas/yii2-fontawesome)
[![License](https://poser.pugx.org/yidas/yii2-fontawesome/license?format=flat-square)](https://packagist.org/packages/yidas/yii2-fontawesome)

This is the [Font Awesome](http://fontawesome.io/) extension for [Yii framework 2.0](http://www.yiiframework.com/). It encapsulates [Font Awesome](https://github.com/FortAwesome/Font-Awesome) distribution assets and thus makes using Font Awesome in Yii applications extremely easy.

---


INSTALLATION
------------

The preferred install way is through [Composer](http://getcomposer.org/download/):

```
composer require yidas/yii2-fontawesome
```

Or you could also edit `composer.json` with adding package in require section then run `composer update`.

```
"yidas/yii2-fontawesome": "~2.0.0"
```

---

CONFIGURATION
-------------

Register or depend Asset into your application:

```php
yidas\yii\fontawesome\FontawesomeAsset
```
    
For eaxmple, to register Font Awesome assets in view :

```php
\yidas\yii\fontawesome\FontawesomeAsset::register($this);
```
    
Or as dependency in your app asset bundle :    

```php
namespace app\assets;
use yii\web\AssetBundle;
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yidas\yii\fontawesome\FontawesomeAsset'
    ];
}
```


### CDN Asset Mode

You could switch Asset to use CDN distribution by configuring `config` file:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii\fontawesome\FontawesomeAsset' => [
                'cdnVersion' => '4.7.0',
            ],
        ],
    ],
],
```

#### Specify a CDN source

You could also specify CDN source you like:

```php
'assetManager' => [
    'bundles' => [
        'yidas\yii\fontawesome\FontawesomeAsset' => [
            'cdnVersion' => true,
            'cdnUrl' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        ],
    ],
],
```


---

USAGE
-----

### Version Control

#### Update dependent packages

    composer update yidas/yii2-fontawesome

#### Update newest Font-Awesome version

    composer update fortawesome/font-awesome

#### Specify a Font-Awesome version

    composer require fortawesome/font-awesome 4.7.0
    
    
    
