<?php

namespace yidas\yii\fontawesome;

/**
 * Font-Awesome Dependent Source Asset 
 *
 * @author  Nick Tsai <myintaer@gmail.com>
 * @version 5.0.0
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
        'css/all.min.css',
    ];
    
    public $js = [
        'js/all.min.js'
    ];

    /**
     * @var string CDN version for CDN mode, eg. `'5.11.0'`
     */
    public $cdnVersion = '5.11.0';

    /**
     * @var bool Enable or disable CDN mode
     */
    public $cdn = false;

    /**
     * @var array Sprintf format or fixed URL of Font-Awesome CDN URL
     */
    public $cdnCSS = ['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/%s/css/font-awesome.min.css'];

    /**
     * @var array Sprintf format or fixed URL of Font-Awesome CDN URL
     */
    public $cdnJS = ['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/%s/js/all.min.js'];
    
    /**
     * Source handler
     */
    public function init()
    {
        // CDN mode
        if ($this->cdn) {
            // Unset sourcePath
            $this->sourcePath = NULL;
            // Rewrite CSS
            $this->css = [];
            foreach ($this->cdnCSS as $key => $url) {
                $this->css[] = sprintf($url, $this->cdnVersion);
            }
            // Rewrite JS
            $this->js = [];
            foreach ($this->cdnJS as $key => $url) {
                $this->js[] = sprintf($url, $this->cdnVersion);
            }
        }

        parent::init();
    }
}
