<?php

namespace yidas\yii\fontawesome;

/**
 * Font-Awesome Dependent Source Asset 
 *
 * @author  Nick Tsai <myintaer@gmail.com>
 * @package fortawesome/font-awesome
 * @see     https://github.com/FortAwesome/Font-Awesome
 */
class FontawesomeAsset extends \yii\web\AssetBundle
{
    /**
     * Bundle with Dependent Source Package
     */
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    public $css = [
        'css/font-awesome.min.css',
    ];

    /**
     * @var string|bool Enable by specifying a CDN version, eg. `'4.7.0'` or set `false` to disable CDN mode
     */
    public $cdnVersion = false;

    /**
     * @var string Sprintf format or fixed URL of Font-Awesome CDN URL, enabled while $cdnVersion is true or not empty
     */
    public $cdnUrl = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/%s/css/font-awesome.min.css';

    /**
     * Source handler
     */
    public function init()
    {
        // CDN mode
        if ($this->cdnVersion) {

            // Unset sourcePath
            $this->sourcePath = NULL;

            // Rewrite css
            $this->css = [
                sprintf($this->cdnUrl, $this->cdnVersion)
                ];
        }

        parent::init();
    }
}
